<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class LabelLayoutResponse
{

  /**
   * 
   * @var LabelLayoutType $LabelLayout
   * @access public
   */
  public $LabelLayout = null;

  /**
   * 
   * @var int $MaxServices
   * @access public
   */
  public $MaxServices = null;

  /**
   * 
   * @var int $MaxDeliveryInstructions
   * @access public
   */
  public $MaxDeliveryInstructions = null;

  /**
   * 
   * @var boolean $FreeTextAllowed
   * @access public
   */
  public $FreeTextAllowed = null;

  /**
   * 
   * @param LabelLayoutType $LabelLayout
   * @param int $MaxServices
   * @param int $MaxDeliveryInstructions
   * @param boolean $FreeTextAllowed
   * @access public
   */
  public function __construct($LabelLayout = null, $MaxServices = null, $MaxDeliveryInstructions = null, $FreeTextAllowed = null)
  {
    $this->LabelLayout = $LabelLayout;
    $this->MaxServices = $MaxServices;
    $this->MaxDeliveryInstructions = $MaxDeliveryInstructions;
    $this->FreeTextAllowed = $FreeTextAllowed;
  }

  /**
   * 
   * @return LabelLayoutType
   */
  public function getLabelLayout()
  {
    return $this->LabelLayout;
  }

  /**
   * 
   * @param LabelLayoutType $LabelLayout
   */
  public function setLabelLayout($LabelLayout)
  {
    $this->LabelLayout = $LabelLayout;
  }

  /**
   * 
   * @return int
   */
  public function getMaxServices()
  {
    return $this->MaxServices;
  }

  /**
   * 
   * @param int $MaxServices
   */
  public function setMaxServices($MaxServices)
  {
    $this->MaxServices = $MaxServices;
  }

  /**
   * 
   * @return int
   */
  public function getMaxDeliveryInstructions()
  {
    return $this->MaxDeliveryInstructions;
  }

  /**
   * 
   * @param int $MaxDeliveryInstructions
   */
  public function setMaxDeliveryInstructions($MaxDeliveryInstructions)
  {
    $this->MaxDeliveryInstructions = $MaxDeliveryInstructions;
  }

  /**
   * 
   * @return boolean
   */
  public function getFreeTextAllowed()
  {
    return $this->FreeTextAllowed;
  }

  /**
   * 
   * @param boolean $FreeTextAllowed
   */
  public function setFreeTextAllowed($FreeTextAllowed)
  {
    $this->FreeTextAllowed = $FreeTextAllowed;
  }

}
