<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class AdditionalData
{

  /**
   * 
   * @var Type $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var Value $Value
   * @access public
   */
  public $Value = null;

  /**
   * 
   * @param Type $Type
   * @param Value $Value
   * @access public
   */
  public function __construct($Type = null, $Value = null)
  {
    $this->Type = $Type;
    $this->Value = $Value;
  }

  /**
   * 
   * @return Type
   */
  public function getType()
  {
    return $this->Type;
  }

  /**
   * 
   * @param Type $Type
   */
  public function setType($Type)
  {
    $this->Type = $Type;
  }

  /**
   * 
   * @return Value
   */
  public function getValue()
  {
    return $this->Value;
  }

  /**
   * 
   * @param Value $Value
   */
  public function setValue($Value)
  {
    $this->Value = $Value;
  }

}
