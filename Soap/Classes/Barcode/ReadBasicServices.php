<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadBasicServices
{
    /**
     *
     * @var Language $Language
     * @access public
     */
    public $Language = null;

    /**
     *
     * @var int $ServiceGroupID
     * @access public
     */
    public $ServiceGroupID = null;

    /**
     *
     * @param Language $Language
     * @param int $ServiceGroupID
     * @access public
     */
    public function __construct($Language = null, $ServiceGroupID = null)
    {
        $this->Language = $Language;
        $this->ServiceGroupID = $ServiceGroupID;
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
     * @return int
     */
    public function getServiceGroupID()
    {
        return $this->ServiceGroupID;
    }

    /**
     *
     * @param int $ServiceGroupID
     */
    public function setServiceGroupID($ServiceGroupID)
    {
        $this->ServiceGroupID = $ServiceGroupID;
    }
}