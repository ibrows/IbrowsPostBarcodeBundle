<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class GenerateLabelFileInfos
{
    /**
     *
     * @var FrankingLicenseType $FrankingLicense
     * @access public
     */
    public $FrankingLicense = null;

    /**
     *
     * @var boolean $PpFranking
     * @access public
     */
    public $PpFranking = null;

    /**
     *
     * @var GenerateLabelCustomer $Customer
     * @access public
     */
    public $Customer = null;

    /**
     *
     * @var CustomerSystemType $CustomerSystem
     * @access public
     */
    public $CustomerSystem = null;

    /**
     *
     * @param FrankingLicenseType $FrankingLicense
     * @param boolean $PpFranking
     * @param GenerateLabelCustomer $Customer
     * @param CustomerSystemType $CustomerSystem
     * @access public
     */
    public function __construct($FrankingLicense = null, $PpFranking = null, $Customer = null, $CustomerSystem = null)
    {
        $this->FrankingLicense = $FrankingLicense;
        $this->PpFranking = $PpFranking;
        $this->Customer = $Customer;
        $this->CustomerSystem = $CustomerSystem;
    }

    /**
     *
     * @return FrankingLicenseType
     */
    public function getFrankingLicense()
    {
        return $this->FrankingLicense;
    }

    /**
     *
     * @param FrankingLicenseType $FrankingLicense
     */
    public function setFrankingLicense($FrankingLicense)
    {
        $this->FrankingLicense = $FrankingLicense;
    }

    /**
     *
     * @return boolean
     */
    public function getPpFranking()
    {
        return $this->PpFranking;
    }

    /**
     *
     * @param boolean $PpFranking
     */
    public function setPpFranking($PpFranking)
    {
        $this->PpFranking = $PpFranking;
    }

    /**
     *
     * @return GenerateLabelCustomer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     *
     * @param GenerateLabelCustomer $Customer
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
    }

    /**
     *
     * @return CustomerSystemType
     */
    public function getCustomerSystem()
    {
        return $this->CustomerSystem;
    }

    /**
     *
     * @param CustomerSystemType $CustomerSystem
     */
    public function setCustomerSystem($CustomerSystem)
    {
        $this->CustomerSystem = $CustomerSystem;
    }
}