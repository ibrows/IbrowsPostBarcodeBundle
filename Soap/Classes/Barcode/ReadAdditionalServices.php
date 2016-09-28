<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadAdditionalServices
{

  /**
   * 
   * @var Language $Language
   * @access public
   */
  public $Language = null;

  /**
   * 
   * @var PRZLType $PRZL
   * @access public
   */
  public $PRZL = null;

  /**
   * 
   * @param Language $Language
   * @param PRZLType $PRZL
   * @access public
   */
  public function __construct($Language = null, $PRZL = null)
  {
    $this->Language = $Language;
    $this->PRZL = $PRZL;
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

  /**
   * 
   * @return PRZLType
   */
  public function getPRZL()
  {
    return $this->PRZL;
  }

  /**
   * 
   * @param PRZLType $PRZL
   */
  public function setPRZL($PRZL)
  {
    $this->PRZL = $PRZL;
  }

}
