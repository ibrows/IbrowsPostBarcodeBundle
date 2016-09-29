<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadDeliveryInstructionsResponse
{
    /**
     *
     * @var ServiceCode $DeliveryInstructions
     * @access public
     */
    public $DeliveryInstructions = null;

    /**
     *
     * @var ErrorsType $Errors
     * @access public
     */
    public $Errors = null;

    /**
     *
     * @param ServiceCode $DeliveryInstructions
     * @param ErrorsType $Errors
     * @access public
     */
    public function __construct($DeliveryInstructions = null, $Errors = null)
    {
        $this->DeliveryInstructions = $DeliveryInstructions;
        $this->Errors = $Errors;
    }

    /**
     *
     * @return ServiceCode
     */
    public function getDeliveryInstructions()
    {
        return $this->DeliveryInstructions;
    }

    /**
     *
     * @param ServiceCode $DeliveryInstructions
     */
    public function setDeliveryInstructions($DeliveryInstructions)
    {
        $this->DeliveryInstructions = $DeliveryInstructions;
    }

    /**
     *
     * @return ErrorsType
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     *
     * @param ErrorsType $Errors
     */
    public function setErrors($Errors)
    {
        $this->Errors = $Errors;
    }
}