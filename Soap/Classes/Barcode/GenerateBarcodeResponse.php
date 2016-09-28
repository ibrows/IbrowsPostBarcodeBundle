<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class GenerateBarcodeResponse
{

  /**
   * 
   * @var BarcodeResponseData $Data
   * @access public
   */
  public $Data = null;

  /**
   * 
   * @param BarcodeResponseData $Data
   * @access public
   */
  public function __construct($Data = null)
  {
    $this->Data = $Data;
  }

  /**
   * 
   * @return BarcodeResponseData
   */
  public function getData()
  {
    return $this->Data;
  }

  /**
   * 
   * @param BarcodeResponseData $Data
   */
  public function setData($Data)
  {
    $this->Data = $Data;
  }

}
