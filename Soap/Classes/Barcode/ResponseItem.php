<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ResponseItem
{

  /**
   * 
   * @var ItemIDType $ItemID
   * @access public
   */
  public $ItemID = null;

  /**
   * 
   * @var ErrorsType $Errors
   * @access public
   */
  public $Errors = null;

  /**
   * 
   * @var WarningsType $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @param ItemIDType $ItemID
   * @param ErrorsType $Errors
   * @param WarningsType $Warnings
   * @access public
   */
  public function __construct($ItemID = null, $Errors = null, $Warnings = null)
  {
    $this->ItemID = $ItemID;
    $this->Errors = $Errors;
    $this->Warnings = $Warnings;
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

  /**
   * 
   * @return WarningsType
   */
  public function getWarnings()
  {
    return $this->Warnings;
  }

  /**
   * 
   * @param WarningsType $Warnings
   */
  public function setWarnings($Warnings)
  {
    $this->Warnings = $Warnings;
  }

}
