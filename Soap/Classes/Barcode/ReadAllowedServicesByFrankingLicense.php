<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadAllowedServicesByFrankingLicense
{
    /**
     *
     * @var FrankingLicenseType $FrankingLicense
     * @access public
     */
    public $FrankingLicense = null;

    /**
     *
     * @var Language $Language
     * @access public
     */
    public $Language = null;

    /**
     *
     * @param FrankingLicenseType $FrankingLicense
     * @param Language $Language
     * @access public
     */
    public function __construct($FrankingLicense = null, $Language = null)
    {
        $this->FrankingLicense = $FrankingLicense;
        $this->Language = $Language;
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
     * @return Language
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     *
     * @param Language $Language
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
    }
}