<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ServiceCodeAttributes
{

  /**
   * 
   * @var PRZLType $PRZL
   * @access public
   */
  public $PRZL = null;

  /**
   * 
   * @var AmountType $Amount
   * @access public
   */
  public $Amount = null;

  /**
   * 
   * @var FreeText $FreeText
   * @access public
   */
  public $FreeText = null;

  /**
   * 
   * @var date $DeliveryDate
   * @access public
   */
  public $DeliveryDate = null;

  /**
   * 
   * @var ParcelAmountType $ParcelNo
   * @access public
   */
  public $ParcelNo = null;

  /**
   * 
   * @var ParcelAmountType $ParcelTotal
   * @access public
   */
  public $ParcelTotal = null;

  /**
   * 
   * @var DeliveryPlace $DeliveryPlace
   * @access public
   */
  public $DeliveryPlace = null;

  /**
   * 
   * @var boolean $ProClima
   * @access public
   */
  public $ProClima = null;

  /**
   * 
   * @var Dimensions $Dimensions
   * @access public
   */
  public $Dimensions = null;

  /**
   * 
   * @var UNNumbers $UNNumbers
   * @access public
   */
  public $UNNumbers = null;

  /**
   * 
   * @param PRZLType $PRZL
   * @param AmountType $Amount
   * @param FreeText $FreeText
   * @param date $DeliveryDate
   * @param ParcelAmountType $ParcelNo
   * @param ParcelAmountType $ParcelTotal
   * @param DeliveryPlace $DeliveryPlace
   * @param boolean $ProClima
   * @param Dimensions $Dimensions
   * @param UNNumbers $UNNumbers
   * @access public
   */
  public function __construct($PRZL = null, $Amount = null, $FreeText = null, $DeliveryDate = null, $ParcelNo = null, $ParcelTotal = null, $DeliveryPlace = null, $ProClima = null, $Dimensions = null, $UNNumbers = null)
  {
    $this->PRZL = $PRZL;
    $this->Amount = $Amount;
    $this->FreeText = $FreeText;
    $this->DeliveryDate = $DeliveryDate;
    $this->ParcelNo = $ParcelNo;
    $this->ParcelTotal = $ParcelTotal;
    $this->DeliveryPlace = $DeliveryPlace;
    $this->ProClima = $ProClima;
    $this->Dimensions = $Dimensions;
    $this->UNNumbers = $UNNumbers;
  }

  /**
   * 
   * @return PRZLType
   */
  public function getPRZL()
  {
    return $this->PRZL;
  }

  /**
   * 
   * @param PRZLType $PRZL
   */
  public function setPRZL($PRZL)
  {
    $this->PRZL = $PRZL;
  }

  /**
   * 
   * @return AmountType
   */
  public function getAmount()
  {
    return $this->Amount;
  }

  /**
   * 
   * @param AmountType $Amount
   */
  public function setAmount($Amount)
  {
    $this->Amount = $Amount;
  }

  /**
   * 
   * @return FreeText
   */
  public function getFreeText()
  {
    return $this->FreeText;
  }

  /**
   * 
   * @param FreeText $FreeText
   */
  public function setFreeText($FreeText)
  {
    $this->FreeText = $FreeText;
  }

  /**
   * 
   * @return date
   */
  public function getDeliveryDate()
  {
    return $this->DeliveryDate;
  }

  /**
   * 
   * @param date $DeliveryDate
   */
  public function setDeliveryDate($DeliveryDate)
  {
    $this->DeliveryDate = $DeliveryDate;
  }

  /**
   * 
   * @return ParcelAmountType
   */
  public function getParcelNo()
  {
    return $this->ParcelNo;
  }

  /**
   * 
   * @param ParcelAmountType $ParcelNo
   */
  public function setParcelNo($ParcelNo)
  {
    $this->ParcelNo = $ParcelNo;
  }

  /**
   * 
   * @return ParcelAmountType
   */
  public function getParcelTotal()
  {
    return $this->ParcelTotal;
  }

  /**
   * 
   * @param ParcelAmountType $ParcelTotal
   */
  public function setParcelTotal($ParcelTotal)
  {
    $this->ParcelTotal = $ParcelTotal;
  }

  /**
   * 
   * @return DeliveryPlace
   */
  public function getDeliveryPlace()
  {
    return $this->DeliveryPlace;
  }

  /**
   * 
   * @param DeliveryPlace $DeliveryPlace
   */
  public function setDeliveryPlace($DeliveryPlace)
  {
    $this->DeliveryPlace = $DeliveryPlace;
  }

  /**
   * 
   * @return boolean
   */
  public function getProClima()
  {
    return $this->ProClima;
  }

  /**
   * 
   * @param boolean $ProClima
   */
  public function setProClima($ProClima)
  {
    $this->ProClima = $ProClima;
  }

  /**
   * 
   * @return Dimensions
   */
  public function getDimensions()
  {
    return $this->Dimensions;
  }

  /**
   * 
   * @param Dimensions $Dimensions
   */
  public function setDimensions($Dimensions)
  {
    $this->Dimensions = $Dimensions;
  }

  /**
   * 
   * @return UNNumbers
   */
  public function getUNNumbers()
  {
    return $this->UNNumbers;
  }

  /**
   * 
   * @param UNNumbers $UNNumbers
   */
  public function setUNNumbers($UNNumbers)
  {
    $this->UNNumbers = $UNNumbers;
  }

}
