<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadServiceGroups
{

  /**
   * 
   * @var Language $Language
   * @access public
   */
  public $Language = null;

  /**
   * 
   * @param Language $Language
   * @access public
   */
  public function __construct($Language = null)
  {
    $this->Language = $Language;
  }

  /**
   * 
   * @return Language
   */
  public function getLanguage()
  {
    return $this->Language;
  }

  /**
   * 
   * @param Language $Language
   */
  public function setLanguage($Language)
  {
    $this->Language = $Language;
  }

}
