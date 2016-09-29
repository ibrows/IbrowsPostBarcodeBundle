<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadBasicServicesResponse
{
    /**
     *
     * @var BasicService $BasicService
     * @access public
     */
    public $BasicService = null;

    /**
     *
     * @var ErrorsType $Errors
     * @access public
     */
    public $Errors = null;

    /**
     *
     * @param BasicService $BasicService
     * @param ErrorsType $Errors
     * @access public
     */
    public function __construct($BasicService = null, $Errors = null)
    {
        $this->BasicService = $BasicService;
        $this->Errors = $Errors;
    }

    /**
     *
     * @return BasicService
     */
    public function getBasicService()
    {
        return $this->BasicService;
    }

    /**
     *
     * @param BasicService $BasicService
     */
    public function setBasicService($BasicService)
    {
        $this->BasicService = $BasicService;
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