<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

include_once('ValidateCombination.php');
include_once('Envelope.php');
include_once('Data.php');
include_once('Provider.php');
include_once('Sending.php');
include_once('ValidateCombinationItem.php');
include_once('Attributes.php');
include_once('ValidateCombinationResponse.php');
include_once('GenerateLabel.php');
include_once('GenerateLabelDefinition.php');
include_once('GenerateLabelFileInfos.php');
include_once('GenerateLabelCustomer.php');
include_once('GenerateLabelResponse.php');
include_once('GenerateLabelResponseDefinition.php');
include_once('LabelResponseItem.php');
include_once('GenerateSingleBarcodes.php');
include_once('SingleBarcodesDefinition.php');
include_once('SingleBarcodesFileInfos.php');
include_once('SingleBarcodesCustomer.php');
include_once('GenerateSingleBarcodesResponse.php');
include_once('SingleBarcodesResponseDefinition.php');
include_once('SingleBarcodesResponseItem.php');
include_once('Barcodes.php');
include_once('LabelData.php');
include_once('Item.php');
include_once('AdditionalINFOS.php');
include_once('Recipient.php');
include_once('LabelAddress.php');
include_once('AdditionalData.php');
include_once('ServiceCodeAttributes.php');
include_once('Dimensions.php');
include_once('UNNumbers.php');
include_once('Notification.php');
include_once('Communication.php');
include_once('ReadServiceGroups.php');
include_once('ReadServiceGroupsResponse.php');
include_once('ReadAllowedServicesByFrankingLicense.php');
include_once('ReadAllowedServicesByFrankingLicenseResponse.php');
include_once('ReadAllowedServicesServiceGroups.php');
include_once('ReadBasicServices.php');
include_once('ReadBasicServicesResponse.php');
include_once('ReadAdditionalServices.php');
include_once('ReadAdditionalServicesResponse.php');
include_once('ReadDeliveryInstructions.php');
include_once('ReadDeliveryInstructionsResponse.php');
include_once('ReadLabelLayouts.php');
include_once('ReadLabelLayoutsResponse.php');
include_once('LabelLayoutResponse.php');
include_once('GenerateBarcode.php');
include_once('GenerateBarcodeResponse.php');
include_once('BarcodeResponseData.php');
include_once('BarcodeDefinition.php');
include_once('ServiceCode.php');
include_once('BasicService.php');
include_once('ServiceGroup.php');
include_once('LabelDefinition.php');
include_once('ResponseItem.php');
include_once('ErrorsType.php');
include_once('WarningsType.php');
include_once('MessageType.php');


/**
 * 
 */
class BarcodeService extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ValidateCombination' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ValidateCombination',
    'Envelope' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Envelope',
    'Data' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Data',
    'Provider' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Provider',
    'Sending' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Sending',
    'ValidateCombinationItem' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ValidateCombinationItem',
    'Attributes' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Attributes',
    'ValidateCombinationResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ValidateCombinationResponse',
    'GenerateLabel' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateLabel',
    'GenerateLabelDefinition' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateLabelDefinition',
    'GenerateLabelFileInfos' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateLabelFileInfos',
    'GenerateLabelCustomer' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateLabelCustomer',
    'GenerateLabelResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateLabelResponse',
    'GenerateLabelResponseDefinition' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateLabelResponseDefinition',
    'LabelResponseItem' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\LabelResponseItem',
    'GenerateSingleBarcodes' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateSingleBarcodes',
    'SingleBarcodesDefinition' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\SingleBarcodesDefinition',
    'SingleBarcodesFileInfos' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\SingleBarcodesFileInfos',
    'SingleBarcodesCustomer' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\SingleBarcodesCustomer',
    'GenerateSingleBarcodesResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateSingleBarcodesResponse',
    'SingleBarcodesResponseDefinition' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\SingleBarcodesResponseDefinition',
    'SingleBarcodesResponseItem' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\SingleBarcodesResponseItem',
    'Barcodes' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Barcodes',
    'LabelData' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\LabelData',
    'Item' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Item',
    'AdditionalINFOS' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\AdditionalINFOS',
    'Recipient' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Recipient',
    'LabelAddress' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\LabelAddress',
    'AdditionalData' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\AdditionalData',
    'ServiceCodeAttributes' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ServiceCodeAttributes',
    'Dimensions' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Dimensions',
    'UNNumbers' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\UNNumbers',
    'Notification' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Notification',
    'Communication' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\Communication',
    'ReadServiceGroups' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadServiceGroups',
    'ReadServiceGroupsResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadServiceGroupsResponse',
    'ReadAllowedServicesByFrankingLicense' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadAllowedServicesByFrankingLicense',
    'ReadAllowedServicesByFrankingLicenseResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadAllowedServicesByFrankingLicenseResponse',
    'ReadAllowedServicesServiceGroups' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadAllowedServicesServiceGroups',
    'ReadBasicServices' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadBasicServices',
    'ReadBasicServicesResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadBasicServicesResponse',
    'ReadAdditionalServices' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadAdditionalServices',
    'ReadAdditionalServicesResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadAdditionalServicesResponse',
    'ReadDeliveryInstructions' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadDeliveryInstructions',
    'ReadDeliveryInstructionsResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadDeliveryInstructionsResponse',
    'ReadLabelLayouts' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadLabelLayouts',
    'ReadLabelLayoutsResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ReadLabelLayoutsResponse',
    'LabelLayoutResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\LabelLayoutResponse',
    'GenerateBarcode' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateBarcode',
    'GenerateBarcodeResponse' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\GenerateBarcodeResponse',
    'BarcodeResponseData' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\BarcodeResponseData',
    'BarcodeDefinition' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\BarcodeDefinition',
    'ServiceCode' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ServiceCode',
    'BasicService' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\BasicService',
    'ServiceGroup' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ServiceGroup',
    'LabelDefinition' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\LabelDefinition',
    'ResponseItem' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ResponseItem',
    'ErrorsType' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\ErrorsType',
    'WarningsType' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\WarningsType',
    'MessageType' => 'Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\MessageType');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'barcode_v2_2.wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param ValidateCombination $body
   * @access public
   * @return ValidateCombinationResponse
   */
  public function ValidateCombination(ValidateCombination $body)
  {
    return $this->__soapCall('ValidateCombination', array($body));
  }

  /**
   * 
   * @param GenerateLabel $body
   * @access public
   * @return GenerateLabelResponse
   */
  public function GenerateLabel(GenerateLabel $body)
  {
    return $this->__soapCall('GenerateLabel', array($body));
  }

  /**
   * 
   * @param GenerateSingleBarcodes $body
   * @access public
   * @return GenerateSingleBarcodesResponse
   */
  public function GenerateSingleBarcodes(GenerateSingleBarcodes $body)
  {
    return $this->__soapCall('GenerateSingleBarcodes', array($body));
  }

  /**
   * 
   * @param ReadServiceGroups $body
   * @access public
   * @return ReadServiceGroupsResponse
   */
  public function ReadServiceGroups(ReadServiceGroups $body)
  {
    return $this->__soapCall('ReadServiceGroups', array($body));
  }

  /**
   * 
   * @param ReadBasicServices $body
   * @access public
   * @return ReadBasicServicesResponse
   */
  public function ReadBasicServices(ReadBasicServices $body)
  {
    return $this->__soapCall('ReadBasicServices', array($body));
  }

  /**
   * 
   * @param ReadAllowedServicesByFrankingLicense $body
   * @access public
   * @return ReadAllowedServicesByFrankingLicenseResponse
   */
  public function ReadAllowedServicesByFrankingLicense(ReadAllowedServicesByFrankingLicense $body)
  {
    return $this->__soapCall('ReadAllowedServicesByFrankingLicense', array($body));
  }

  /**
   * 
   * @param ReadAdditionalServices $body
   * @access public
   * @return ReadAdditionalServicesResponse
   */
  public function ReadAdditionalServices(ReadAdditionalServices $body)
  {
    return $this->__soapCall('ReadAdditionalServices', array($body));
  }

  /**
   * 
   * @param ReadDeliveryInstructions $body
   * @access public
   * @return ReadDeliveryInstructionsResponse
   */
  public function ReadDeliveryInstructions(ReadDeliveryInstructions $body)
  {
    return $this->__soapCall('ReadDeliveryInstructions', array($body));
  }

  /**
   * 
   * @param ReadLabelLayouts $body
   * @access public
   * @return ReadLabelLayoutsResponse
   */
  public function ReadLabelLayouts(ReadLabelLayouts $body)
  {
    return $this->__soapCall('ReadLabelLayouts', array($body));
  }

  /**
   * 
   * @param GenerateBarcode $body
   * @access public
   * @return GenerateBarcodeResponse
   */
  public function GenerateBarcode(GenerateBarcode $body)
  {
    return $this->__soapCall('GenerateBarcode', array($body));
  }

}
