<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class SingleBarcodesResponseDefinition
{
    /**
     *
     * @var boolean $ColorPrintRequired
     * @access public
     */
    public $ColorPrintRequired = null;

    /**
     *
     * @param boolean $ColorPrintRequired
     * @access public
     */
    public function __construct($ColorPrintRequired = null)
    {
        $this->ColorPrintRequired = $ColorPrintRequired;
    }

    /**
     *
     * @return boolean
     */
    public function getColorPrintRequired()
    {
        return $this->ColorPrintRequired;
    }

    /**
     *
     * @param boolean $ColorPrintRequired
     */
    public function setColorPrintRequired($ColorPrintRequired)
    {
        $this->ColorPrintRequired = $ColorPrintRequired;
    }
}