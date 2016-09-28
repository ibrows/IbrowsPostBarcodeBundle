<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Provider
{

  /**
   * 
   * @var Sending $Sending
   * @access public
   */
  public $Sending = null;

  /**
   * 
   * @param Sending $Sending
   * @access public
   */
  public function __construct($Sending = null)
  {
    $this->Sending = $Sending;
  }

  /**
   * 
   * @return Sending
   */
  public function getSending()
  {
    return $this->Sending;
  }

  /**
   * 
   * @param Sending $Sending
   */
  public function setSending($Sending)
  {
    $this->Sending = $Sending;
  }

}
