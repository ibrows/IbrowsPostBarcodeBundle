<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class AdditionalINFOS
{
    /**
     *
     * @var AdditionalData $AdditionalData
     * @access public
     */
    public $AdditionalData = null;

    /**
     *
     * @param AdditionalData $AdditionalData
     * @access public
     */
    public function __construct($AdditionalData = null)
    {
        $this->AdditionalData = $AdditionalData;
    }

    /**
     *
     * @return AdditionalData
     */
    public function getAdditionalData()
    {
        return $this->AdditionalData;
    }

    /**
     *
     * @param AdditionalData $AdditionalData
     */
    public function setAdditionalData($AdditionalData)
    {
        $this->AdditionalData = $AdditionalData;
    }
}