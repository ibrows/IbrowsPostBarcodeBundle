<?php

namespace Ibrows\PostBarcodeBundle\Tests;

use Ibrows\PostBarcodeBundle\Entity\Address;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BarcodeClientServiceTest extends WebTestCase
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function testGenerateSingleBarcodes()
    {
        $service = $this->getContainer()->get('ibrows_post_barcode.soap.client.service.barcode');
        $service->GenerateSingleBarcodes();
    }

    public function testGenerateLabel()
    {
        $recipient = new Address();
        $recipient->setCountry('CH');
        $recipient->setCity('Zürich');
        $recipient->setCompany('iBROWS AG');
        $recipient->setFirstName('Manuel');
        $recipient->setLastName('Knobel');
        $recipient->setPrimaryStreet('Seestrasse 356');
        $recipient->setZipCode('8038');
        $recipient->setTitle(Address::MISTER);

        $customer = clone $recipient;

        $service = $this->getContainer()->get('ibrows_post_barcode.soap.client.service.barcode');
        $service->GenerateLabel($recipient, $customer);
    }

    /**
     * @return ContainerInterface
     */
    protected function getContainer()
    {
        return $this->container = $this->container ?: static::createClient()->getContainer();
    }
}