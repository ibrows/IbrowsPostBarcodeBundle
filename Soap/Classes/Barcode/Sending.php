<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Sending
{

  /**
   * 
   * @var ValidateCombinationItem $Item
   * @access public
   */
  public $Item = null;

  /**
   * 
   * @param ValidateCombinationItem $Item
   * @access public
   */
  public function __construct($Item = null)
  {
    $this->Item = $Item;
  }

  /**
   * 
   * @return ValidateCombinationItem
   */
  public function getItem()
  {
    return $this->Item;
  }

  /**
   * 
   * @param ValidateCombinationItem $Item
   */
  public function setItem($Item)
  {
    $this->Item = $Item;
  }

}
