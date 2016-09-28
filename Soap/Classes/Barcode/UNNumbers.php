<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class UNNumbers
{

  /**
   * 
   * @var UNNumber $UNNumber
   * @access public
   */
  public $UNNumber = null;

  /**
   * 
   * @param UNNumber $UNNumber
   * @access public
   */
  public function __construct($UNNumber = null)
  {
    $this->UNNumber = $UNNumber;
  }

  /**
   * 
   * @return UNNumber
   */
  public function getUNNumber()
  {
    return $this->UNNumber;
  }

  /**
   * 
   * @param UNNumber $UNNumber
   */
  public function setUNNumber($UNNumber)
  {
    $this->UNNumber = $UNNumber;
  }

}
