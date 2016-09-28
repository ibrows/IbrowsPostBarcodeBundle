<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class LabelResponseItem
{

  /**
   * 
   * @var IdentCodeType $IdentCode
   * @access public
   */
  public $IdentCode = null;

  /**
   * 
   * @var base64Binary $Label
   * @access public
   */
  public $Label = null;

  /**
   * 
   * @param IdentCodeType $IdentCode
   * @param base64Binary $Label
   * @access public
   */
  public function __construct($IdentCode = null, $Label = null)
  {
    $this->IdentCode = $IdentCode;
    $this->Label = $Label;
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
   * @return base64Binary
   */
  public function getLabel()
  {
    return $this->Label;
  }

  /**
   * 
   * @param base64Binary $Label
   */
  public function setLabel($Label)
  {
    $this->Label = $Label;
  }

}
