<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class SingleBarcodesResponseItem
{

  /**
   * 
   * @var IdentCodeType $IdentCode
   * @access public
   */
  public $IdentCode = null;

  /**
   * 
   * @var Barcodes $Barcodes
   * @access public
   */
  public $Barcodes = null;

  /**
   * 
   * @param IdentCodeType $IdentCode
   * @param Barcodes $Barcodes
   * @access public
   */
  public function __construct($IdentCode = null, $Barcodes = null)
  {
    $this->IdentCode = $IdentCode;
    $this->Barcodes = $Barcodes;
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
   * @return Barcodes
   */
  public function getBarcodes()
  {
    return $this->Barcodes;
  }

  /**
   * 
   * @param Barcodes $Barcodes
   */
  public function setBarcodes($Barcodes)
  {
    $this->Barcodes = $Barcodes;
  }

}
