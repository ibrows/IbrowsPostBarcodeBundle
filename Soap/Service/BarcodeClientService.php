<?php

namespace Ibrows\PostBarcodeBundle\Soap\Service;

use Ibrows\PostBarcodeBundle\Model\AddressInterface;
use Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\BarcodeDefinition;
use Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\BarcodeResponseData;
use Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\BarcodeService;
use Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateBarcode;
use Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateLabel;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\Customer;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\Data;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\Envelope;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\FileInfos;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\Item;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\LabelDefinition;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\Provider;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\Recipient;
use Ibrows\PostBarcodeBundle\Soap\CustomClasses\Sending;

/**
 * Class BarcodeClientService
 * @package Ibrows\PostBarcodeBundle\Soap\Service
 */
class BarcodeClientService extends AbstractSOAPService
{
    const LABELLAYOUT_FORMAT_A5 = 'A5';
    const LABELLAYOUT_FORMAT_A6 = 'A6';

    const DELIVERY_INSTRUCTION_CODE_DATE = 'ZAW3217';

    /**
     * @var BarcodeService
     */
    protected $client;

    /**
     * @var string
     */
    protected $folder;

    /**
     * @var string
     */
    protected $frankingLicense;

    /**
     * BarcodeClientService constructor.
     * @param SoapClientFactory $factory
     * @param string            $barcodeFolder
     * @param string            $frankingLicense
     */
    public function __construct(SoapClientFactory $factory, $barcodeFolder, $frankingLicense)
    {
        parent::__construct($factory);
        $this->client = $this->factory->getBarcodeSoapClient();
        $this->folder = $barcodeFolder;
        $this->frankingLicense = $frankingLicense;
    }

    /**
     * @param string $type
     * @param string $file
     * @param int    $res
     * @param string $lang
     * @return BarcodeResponseData
     */
    public function generateSingleBarcodes($type = 'LSO_2', $file = 'PNG', $res = 200, $lang = 'de')
    {
        $generateBarcode = new GenerateBarcode();
        $barcodeDefinition = new BarcodeDefinition();
        $barcodeDefinition->BarcodeType = $type;
        $barcodeDefinition->ImageFileType = $file;
        $barcodeDefinition->ImageResolution = $res;

        $generateBarcode->Language = $lang;
        $generateBarcode->setBarcodeDefinition($barcodeDefinition);
        $response = $this->client->GenerateBarcode($generateBarcode);
        $responseItem = $response->getData();

        // check for errors
        if (!$responseItem->getErrors()) {
            $this->saveBarcode($responseItem->getDeliveryNoteRef(), $responseItem->getBarcode());
        }

        return $responseItem;
    }

    /**
     * TODO refactor this method: too many parameters
     *
     * @param AddressInterface $recipient
     * @param AddressInterface $customer
     * @param \DateTime|null   $deliveryDate
     * @param string           $format
     * @param array            $przl
     * @param string           $text
     * @param integer          $weight
     * @param array            $unNumbers
     * @return Item
     */
    public function generateLabel(
        AddressInterface $recipient,
        AddressInterface $customer,
        $deliveryDate = null,
        $format = 'PNG',
        $przl = ['ECO'],
        $text = '',
        $weight = 0,
        $unNumbers = []
    ) {
        $company = $recipient->getCompany();
        if ($company) {
            $name1 = $company;
            $name2 = $recipient->getFullName();
        } else {
            $name1 = $recipient->getFullName();
            $name2 = null;
        }

        $postRecipient = new Recipient(
            $name1,
            $recipient->getPrimaryStreet(),
            $recipient->getZipCode(),
            $recipient->getCity(),
            null,
            null,
            $name2
        );

        $itemOptions = [
            'PRZL'     => $przl,
            'FreeText' => $text,
            'ProClima' => true,
        ];

        if (0 < $weight) {
            $itemOptions['Dimensions'] = ['Weight' => $weight];
        }

        if ($deliveryDate instanceof \DateTime) {
            $itemOptions['DeliveryDate'] = $deliveryDate->format('Y-m-d');
            // Delivery instruction code for specific delivery date
            $itemOptions['PRZL'][] = self::DELIVERY_INSTRUCTION_CODE_DATE;
        }

        if (0 < count($unNumbers)) {
            $itemOptions['UNNumbers'] = ['UNNumber' => $unNumbers];
        }

        $item = new Item(0, $postRecipient, $itemOptions);

        $sending = new Sending($item);
        $provider = new Provider($sending);
        $data = new Data($provider);

        $postCustomer = new Customer(
            $customer->getCompany(),
            $customer->getPrimaryStreet(),
            $customer->getSecondaryStreet(),
            $customer->getZipCode(),
            $customer->getCity(),
            $customer->getZipCode()." ".$customer->getCity()
        );

        $labelLayout = self::LABELLAYOUT_FORMAT_A6;
        if (3 < count($przl)) {
            $labelLayout = self::LABELLAYOUT_FORMAT_A5;
        }

        $fileInfos = new FileInfos($this->frankingLicense, true, $postCustomer);
        $labelDefinition = new LabelDefinition($labelLayout, 'RecipientAndCustomer', $format);
        $envelope = new Envelope($data, $fileInfos, $labelDefinition);

        $generateLabel = new GenerateLabel('de', $envelope);

        $response = $this->client->GenerateLabel($generateLabel);
        $responseItem = $response->getEnvelope()->getData()->getProvider()->getSending()->getItem();

        if (!$responseItem->getErrors()) {
            $this->saveBarcode($responseItem->getIdentCode(), $responseItem->getLabel(), $format);
        }

        return $responseItem;
    }

    /**
     * @param string $name
     * @param string $ext
     * @return string
     */
    public function getFilepath($name, $ext = 'png')
    {
        return $this->folder."/".$name.".".strtolower($ext);
    }

    /**
     * @param BarcodeService $client
     */
    public function setClient($client)
    {
        if (!$client instanceof BarcodeClientService) {
            throw new \InvalidArgumentException("client need to be instance of BarcodeClientService");
        }

        $this->client = $client;
    }

    /**
     * @return BarcodeService
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param string $name
     * @param string $data
     * @param string $format
     */
    protected function saveBarcode($name, $data, $format = 'PNG')
    {
        if (!file_exists($this->folder)) {
            mkdir($this->folder, 0777, true);
        }
        file_put_contents($this->getFilepath($name, $format), $data);
    }
}
