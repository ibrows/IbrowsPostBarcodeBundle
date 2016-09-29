<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Communication
{
    /**
     *
     * @var EMailAddressType $Email
     * @access public
     */
    public $Email = null;

    /**
     *
     * @var PhoneNumberType $Mobile
     * @access public
     */
    public $Mobile = null;

    /**
     *
     * @param EMailAddressType $Email
     * @param PhoneNumberType $Mobile
     * @access public
     */
    public function __construct($Email = null, $Mobile = null)
    {
        $this->Email = $Email;
        $this->Mobile = $Mobile;
    }

    /**
     *
     * @return EMailAddressType
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     *
     * @param EMailAddressType $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     *
     * @return PhoneNumberType
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     *
     * @param PhoneNumberType $Mobile
     */
    public function setMobile($Mobile)
    {
        $this->Mobile = $Mobile;
    }
}