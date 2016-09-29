<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Recipient
{
    /**
     *
     * @var PostIdent $PostIdent
     * @access public
     */
    public $PostIdent = null;

    /**
     *
     * @var RecipientAddressType $Title
     * @access public
     */
    public $Title = null;

    /**
     *
     * @var boolean $PersonallyAddressed
     * @access public
     */
    public $PersonallyAddressed = null;

    /**
     *
     * @var RecipientAddressType $Name1
     * @access public
     */
    public $Name1 = null;

    /**
     *
     * @var RecipientAddressType $FirstName
     * @access public
     */
    public $FirstName = null;

    /**
     *
     * @var RecipientAddressType $Name2
     * @access public
     */
    public $Name2 = null;

    /**
     *
     * @var RecipientAddressType $Name3
     * @access public
     */
    public $Name3 = null;

    /**
     *
     * @var RecipientAddressType $AddressSuffix
     * @access public
     */
    public $AddressSuffix = null;

    /**
     *
     * @var RecipientAddressType $Street
     * @access public
     */
    public $Street = null;

    /**
     *
     * @var HouseNo $HouseNo
     * @access public
     */
    public $HouseNo = null;

    /**
     *
     * @var RecipientAddressType $POBox
     * @access public
     */
    public $POBox = null;

    /**
     *
     * @var FloorNo $FloorNo
     * @access public
     */
    public $FloorNo = null;

    /**
     *
     * @var MailboxNo $MailboxNo
     * @access public
     */
    public $MailboxNo = null;

    /**
     *
     * @var ZIP $ZIP
     * @access public
     */
    public $ZIP = null;

    /**
     *
     * @var RecipientAddressType $City
     * @access public
     */
    public $City = null;

    /**
     *
     * @var CountryType $Country
     * @access public
     */
    public $Country = null;

    /**
     *
     * @var PhoneNumberType $Phone
     * @access public
     */
    public $Phone = null;

    /**
     *
     * @var PhoneNumberType $Mobile
     * @access public
     */
    public $Mobile = null;

    /**
     *
     * @var EMailAddressType $EMail
     * @access public
     */
    public $EMail = null;

    /**
     *
     * @var LabelAddress $LabelAddress
     * @access public
     */
    public $LabelAddress = null;

    /**
     *
     * @param PostIdent $PostIdent
     * @param RecipientAddressType $Title
     * @param boolean $PersonallyAddressed
     * @param RecipientAddressType $Name1
     * @param RecipientAddressType $FirstName
     * @param RecipientAddressType $Name2
     * @param RecipientAddressType $Name3
     * @param RecipientAddressType $AddressSuffix
     * @param RecipientAddressType $Street
     * @param HouseNo $HouseNo
     * @param RecipientAddressType $POBox
     * @param FloorNo $FloorNo
     * @param MailboxNo $MailboxNo
     * @param ZIP $ZIP
     * @param RecipientAddressType $City
     * @param CountryType $Country
     * @param PhoneNumberType $Phone
     * @param PhoneNumberType $Mobile
     * @param EMailAddressType $EMail
     * @param LabelAddress $LabelAddress
     * @access public
     */
    public function __construct($PostIdent = null, $Title = null, $PersonallyAddressed = null, $Name1 = null, $FirstName = null, $Name2 = null, $Name3 = null, $AddressSuffix = null, $Street = null, $HouseNo = null, $POBox = null, $FloorNo = null, $MailboxNo = null, $ZIP = null, $City = null, $Country = null, $Phone = null, $Mobile = null, $EMail = null, $LabelAddress = null)
    {
        $this->PostIdent = $PostIdent;
        $this->Title = $Title;
        $this->PersonallyAddressed = $PersonallyAddressed;
        $this->Name1 = $Name1;
        $this->FirstName = $FirstName;
        $this->Name2 = $Name2;
        $this->Name3 = $Name3;
        $this->AddressSuffix = $AddressSuffix;
        $this->Street = $Street;
        $this->HouseNo = $HouseNo;
        $this->POBox = $POBox;
        $this->FloorNo = $FloorNo;
        $this->MailboxNo = $MailboxNo;
        $this->ZIP = $ZIP;
        $this->City = $City;
        $this->Country = $Country;
        $this->Phone = $Phone;
        $this->Mobile = $Mobile;
        $this->EMail = $EMail;
        $this->LabelAddress = $LabelAddress;
    }

    /**
     *
     * @return PostIdent
     */
    public function getPostIdent()
    {
        return $this->PostIdent;
    }

    /**
     *
     * @param PostIdent $PostIdent
     */
    public function setPostIdent($PostIdent)
    {
        $this->PostIdent = $PostIdent;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     *
     * @param RecipientAddressType $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    /**
     *
     * @return boolean
     */
    public function getPersonallyAddressed()
    {
        return $this->PersonallyAddressed;
    }

    /**
     *
     * @param boolean $PersonallyAddressed
     */
    public function setPersonallyAddressed($PersonallyAddressed)
    {
        $this->PersonallyAddressed = $PersonallyAddressed;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getName1()
    {
        return $this->Name1;
    }

    /**
     *
     * @param RecipientAddressType $Name1
     */
    public function setName1($Name1)
    {
        $this->Name1 = $Name1;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     *
     * @param RecipientAddressType $FirstName
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getName2()
    {
        return $this->Name2;
    }

    /**
     *
     * @param RecipientAddressType $Name2
     */
    public function setName2($Name2)
    {
        $this->Name2 = $Name2;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getName3()
    {
        return $this->Name3;
    }

    /**
     *
     * @param RecipientAddressType $Name3
     */
    public function setName3($Name3)
    {
        $this->Name3 = $Name3;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getAddressSuffix()
    {
        return $this->AddressSuffix;
    }

    /**
     *
     * @param RecipientAddressType $AddressSuffix
     */
    public function setAddressSuffix($AddressSuffix)
    {
        $this->AddressSuffix = $AddressSuffix;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     *
     * @param RecipientAddressType $Street
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
    }

    /**
     *
     * @return HouseNo
     */
    public function getHouseNo()
    {
        return $this->HouseNo;
    }

    /**
     *
     * @param HouseNo $HouseNo
     */
    public function setHouseNo($HouseNo)
    {
        $this->HouseNo = $HouseNo;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getPOBox()
    {
        return $this->POBox;
    }

    /**
     *
     * @param RecipientAddressType $POBox
     */
    public function setPOBox($POBox)
    {
        $this->POBox = $POBox;
    }

    /**
     *
     * @return FloorNo
     */
    public function getFloorNo()
    {
        return $this->FloorNo;
    }

    /**
     *
     * @param FloorNo $FloorNo
     */
    public function setFloorNo($FloorNo)
    {
        $this->FloorNo = $FloorNo;
    }

    /**
     *
     * @return MailboxNo
     */
    public function getMailboxNo()
    {
        return $this->MailboxNo;
    }

    /**
     *
     * @param MailboxNo $MailboxNo
     */
    public function setMailboxNo($MailboxNo)
    {
        $this->MailboxNo = $MailboxNo;
    }

    /**
     *
     * @return ZIP
     */
    public function getZIP()
    {
        return $this->ZIP;
    }

    /**
     *
     * @param ZIP $ZIP
     */
    public function setZIP($ZIP)
    {
        $this->ZIP = $ZIP;
    }

    /**
     *
     * @return RecipientAddressType
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     *
     * @param RecipientAddressType $City
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     *
     * @return CountryType
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     *
     * @param CountryType $Country
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    /**
     *
     * @return PhoneNumberType
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     *
     * @param PhoneNumberType $Phone
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
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

    /**
     *
     * @return EMailAddressType
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     *
     * @param EMailAddressType $EMail
     */
    public function setEMail($EMail)
    {
        $this->EMail = $EMail;
    }

    /**
     *
     * @return LabelAddress
     */
    public function getLabelAddress()
    {
        return $this->LabelAddress;
    }

    /**
     *
     * @param LabelAddress $LabelAddress
     */
    public function setLabelAddress($LabelAddress)
    {
        $this->LabelAddress = $LabelAddress;
    }
}