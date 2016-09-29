<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ValidateCombinationItem
{
    /**
     *
     * @var ItemIDType $ItemID
     * @access public
     */
    public $ItemID = null;

    /**
     *
     * @var Attributes $Attributes
     * @access public
     */
    public $Attributes = null;

    /**
     *
     * @var CountryType $Country
     * @access public
     */
    public $Country = null;

    /**
     *
     * @param ItemIDType $ItemID
     * @param Attributes $Attributes
     * @param CountryType $Country
     * @access public
     */
    public function __construct($ItemID = null, $Attributes = null, $Country = null)
    {
        $this->ItemID = $ItemID;
        $this->Attributes = $Attributes;
        $this->Country = $Country;
    }

    /**
     *
     * @return ItemIDType
     */
    public function getItemID()
    {
        return $this->ItemID;
    }

    /**
     *
     * @param ItemIDType $ItemID
     */
    public function setItemID($ItemID)
    {
        $this->ItemID = $ItemID;
    }

    /**
     *
     * @return Attributes
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     *
     * @param Attributes $Attributes
     */
    public function setAttributes($Attributes)
    {
        $this->Attributes = $Attributes;
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
}