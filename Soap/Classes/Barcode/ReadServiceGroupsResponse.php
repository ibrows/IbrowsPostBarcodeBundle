<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadServiceGroupsResponse
{
    /**
     *
     * @var ServiceGroup $ServiceGroup
     * @access public
     */
    public $ServiceGroup = null;

    /**
     *
     * @var ErrorsType $Errors
     * @access public
     */
    public $Errors = null;

    /**
     *
     * @param ServiceGroup $ServiceGroup
     * @param ErrorsType $Errors
     * @access public
     */
    public function __construct($ServiceGroup = null, $Errors = null)
    {
        $this->ServiceGroup = $ServiceGroup;
        $this->Errors = $Errors;
    }

    /**
     *
     * @return ServiceGroup
     */
    public function getServiceGroup()
    {
        return $this->ServiceGroup;
    }

    /**
     *
     * @param ServiceGroup $ServiceGroup
     */
    public function setServiceGroup($ServiceGroup)
    {
        $this->ServiceGroup = $ServiceGroup;
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