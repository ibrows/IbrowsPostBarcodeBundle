<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Item
{

  /**
   * 
   * @var ItemIDType $ItemID
   * @access public
   */
  public $ItemID = null;

  /**
   * 
   * @var ItemNumberType $ItemNumber
   * @access public
   */
  public $ItemNumber = null;

  /**
   * 
   * @var IdentCodeType $IdentCode
   * @access public
   */
  public $IdentCode = null;

  /**
   * 
   * @var Recipient $Recipient
   * @access public
   */
  public $Recipient = null;

  /**
   * 
   * @var AdditionalINFOS $AdditionalINFOS
   * @access public
   */
  public $AdditionalINFOS = null;

  /**
   * 
   * @var ServiceCodeAttributes $Attributes
   * @access public
   */
  public $Attributes = null;

  /**
   * 
   * @var Notification $Notification
   * @access public
   */
  public $Notification = null;

  /**
   * 
   * @param ItemIDType $ItemID
   * @param ItemNumberType $ItemNumber
   * @param IdentCodeType $IdentCode
   * @param Recipient $Recipient
   * @param AdditionalINFOS $AdditionalINFOS
   * @param ServiceCodeAttributes $Attributes
   * @param Notification $Notification
   * @access public
   */
  public function __construct($ItemID = null, $ItemNumber = null, $IdentCode = null, $Recipient = null, $AdditionalINFOS = null, $Attributes = null, $Notification = null)
  {
    $this->ItemID = $ItemID;
    $this->ItemNumber = $ItemNumber;
    $this->IdentCode = $IdentCode;
    $this->Recipient = $Recipient;
    $this->AdditionalINFOS = $AdditionalINFOS;
    $this->Attributes = $Attributes;
    $this->Notification = $Notification;
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
   * @return ItemNumberType
   */
  public function getItemNumber()
  {
    return $this->ItemNumber;
  }

  /**
   * 
   * @param ItemNumberType $ItemNumber
   */
  public function setItemNumber($ItemNumber)
  {
    $this->ItemNumber = $ItemNumber;
  }

  /**
   * 
   * @return IdentCodeType
   */
  public function getIdentCode()
  {
    return $this->IdentCode;
  }

  /**
   * 
   * @param IdentCodeType $IdentCode
   */
  public function setIdentCode($IdentCode)
  {
    $this->IdentCode = $IdentCode;
  }

  /**
   * 
   * @return Recipient
   */
  public function getRecipient()
  {
    return $this->Recipient;
  }

  /**
   * 
   * @param Recipient $Recipient
   */
  public function setRecipient($Recipient)
  {
    $this->Recipient = $Recipient;
  }

  /**
   * 
   * @return AdditionalINFOS
   */
  public function getAdditionalINFOS()
  {
    return $this->AdditionalINFOS;
  }

  /**
   * 
   * @param AdditionalINFOS $AdditionalINFOS
   */
  public function setAdditionalINFOS($AdditionalINFOS)
  {
    $this->AdditionalINFOS = $AdditionalINFOS;
  }

  /**
   * 
   * @return ServiceCodeAttributes
   */
  public function getAttributes()
  {
    return $this->Attributes;
  }

  /**
   * 
   * @param ServiceCodeAttributes $Attributes
   */
  public function setAttributes($Attributes)
  {
    $this->Attributes = $Attributes;
  }

  /**
   * 
   * @return Notification
   */
  public function getNotification()
  {
    return $this->Notification;
  }

  /**
   * 
   * @param Notification $Notification
   */
  public function setNotification($Notification)
  {
    $this->Notification = $Notification;
  }

}
