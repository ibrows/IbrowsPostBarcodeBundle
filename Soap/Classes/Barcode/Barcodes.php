<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Barcodes
{

  /**
   * 
   * @var base64Binary $Barcode
   * @access public
   */
  public $Barcode = null;

  /**
   * 
   * @param base64Binary $Barcode
   * @access public
   */
  public function __construct($Barcode = null)
  {
    $this->Barcode = $Barcode;
  }

  /**
   * 
   * @return base64Binary
   */
  public function getBarcode()
  {
    return $this->Barcode;
  }

  /**
   * 
   * @param base64Binary $Barcode
   */
  public function setBarcode($Barcode)
  {
    $this->Barcode = $Barcode;
  }

}
