<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadAllowedServicesServiceGroups
{
    /**
     *
     * @var ServiceGroup $ServiceGroup
     * @access public
     */
    public $ServiceGroup = null;

    /**
     *
     * @var BasicService $BasicService
     * @access public
     */
    public $BasicService = null;

    /**
     *
     * @param ServiceGroup $ServiceGroup
     * @param BasicService $BasicService
     * @access public
     */
    public function __construct($ServiceGroup = null, $BasicService = null)
    {
        $this->ServiceGroup = $ServiceGroup;
        $this->BasicService = $BasicService;
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
}