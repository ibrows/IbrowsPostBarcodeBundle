<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class GenerateBarcode
{
    /**
     *
     * @var Language $Language
     * @access public
     */
    public $Language = null;

    /**
     *
     * @var BarcodeDefinition $BarcodeDefinition
     * @access public
     */
    public $BarcodeDefinition = null;

    /**
     *
     * @param Language $Language
     * @param BarcodeDefinition $BarcodeDefinition
     * @access public
     */
    public function __construct($Language = null, $BarcodeDefinition = null)
    {
        $this->Language = $Language;
        $this->BarcodeDefinition = $BarcodeDefinition;
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

    /**
     *
     * @return BarcodeDefinition
     */
    public function getBarcodeDefinition()
    {
        return $this->BarcodeDefinition;
    }

    /**
     *
     * @param BarcodeDefinition $BarcodeDefinition
     */
    public function setBarcodeDefinition($BarcodeDefinition)
    {
        $this->BarcodeDefinition = $BarcodeDefinition;
    }
}