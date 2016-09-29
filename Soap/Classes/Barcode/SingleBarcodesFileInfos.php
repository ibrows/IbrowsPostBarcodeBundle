<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class SingleBarcodesFileInfos
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
     * @var SingleBarcodesCustomer $Customer
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
     * @param SingleBarcodesCustomer $Customer
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
     * @return SingleBarcodesCustomer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     *
     * @param SingleBarcodesCustomer $Customer
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