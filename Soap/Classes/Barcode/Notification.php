<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Notification
{

  /**
   * 
   * @var Communication $Communication
   * @access public
   */
  public $Communication = null;

  /**
   * 
   * @var Service $Service
   * @access public
   */
  public $Service = null;

  /**
   * 
   * @var FreeText1 $FreeText1
   * @access public
   */
  public $FreeText1 = null;

  /**
   * 
   * @var FreeText2 $FreeText2
   * @access public
   */
  public $FreeText2 = null;

  /**
   * 
   * @var Language $Language
   * @access public
   */
  public $Language = null;

  /**
   * 
   * @var NotificationType $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @param Communication $Communication
   * @param Service $Service
   * @param FreeText1 $FreeText1
   * @param FreeText2 $FreeText2
   * @param Language $Language
   * @param NotificationType $Type
   * @access public
   */
  public function __construct($Communication = null, $Service = null, $FreeText1 = null, $FreeText2 = null, $Language = null, $Type = null)
  {
    $this->Communication = $Communication;
    $this->Service = $Service;
    $this->FreeText1 = $FreeText1;
    $this->FreeText2 = $FreeText2;
    $this->Language = $Language;
    $this->Type = $Type;
  }

  /**
   * 
   * @return Communication
   */
  public function getCommunication()
  {
    return $this->Communication;
  }

  /**
   * 
   * @param Communication $Communication
   */
  public function setCommunication($Communication)
  {
    $this->Communication = $Communication;
  }

  /**
   * 
   * @return Service
   */
  public function getService()
  {
    return $this->Service;
  }

  /**
   * 
   * @param Service $Service
   */
  public function setService($Service)
  {
    $this->Service = $Service;
  }

  /**
   * 
   * @return FreeText1
   */
  public function getFreeText1()
  {
    return $this->FreeText1;
  }

  /**
   * 
   * @param FreeText1 $FreeText1
   */
  public function setFreeText1($FreeText1)
  {
    $this->FreeText1 = $FreeText1;
  }

  /**
   * 
   * @return FreeText2
   */
  public function getFreeText2()
  {
    return $this->FreeText2;
  }

  /**
   * 
   * @param FreeText2 $FreeText2
   */
  public function setFreeText2($FreeText2)
  {
    $this->FreeText2 = $FreeText2;
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
   * @return NotificationType
   */
  public function getType()
  {
    return $this->Type;
  }

  /**
   * 
   * @param NotificationType $Type
   */
  public function setType($Type)
  {
    $this->Type = $Type;
  }

}
