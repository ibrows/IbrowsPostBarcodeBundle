<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class BarcodeResponseData
{

  /**
   * 
   * @var base64Binary $Barcode
   * @access public
   */
  public $Barcode = null;

  /**
   * 
   * @var DeliveryNoteRef $DeliveryNoteRef
   * @access public
   */
  public $DeliveryNoteRef = null;

  /**
   * 
   * @var BarcodeDefinition $BarcodeDefinition
   * @access public
   */
  public $BarcodeDefinition = null;

  /**
   * 
   * @var boolean $ColorPrintRequired
   * @access public
   */
  public $ColorPrintRequired = null;

  /**
   * 
   * @var ErrorsType $Errors
   * @access public
   */
  public $Errors = null;

  /**
   * 
   * @var WarningsType $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @param base64Binary $Barcode
   * @param DeliveryNoteRef $DeliveryNoteRef
   * @param BarcodeDefinition $BarcodeDefinition
   * @param boolean $ColorPrintRequired
   * @param ErrorsType $Errors
   * @param WarningsType $Warnings
   * @access public
   */
  public function __construct($Barcode = null, $DeliveryNoteRef = null, $BarcodeDefinition = null, $ColorPrintRequired = null, $Errors = null, $Warnings = null)
  {
    $this->Barcode = $Barcode;
    $this->DeliveryNoteRef = $DeliveryNoteRef;
    $this->BarcodeDefinition = $BarcodeDefinition;
    $this->ColorPrintRequired = $ColorPrintRequired;
    $this->Errors = $Errors;
    $this->Warnings = $Warnings;
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

  /**
   * 
   * @return DeliveryNoteRef
   */
  public function getDeliveryNoteRef()
  {
    return $this->DeliveryNoteRef;
  }

  /**
   * 
   * @param DeliveryNoteRef $DeliveryNoteRef
   */
  public function setDeliveryNoteRef($DeliveryNoteRef)
  {
    $this->DeliveryNoteRef = $DeliveryNoteRef;
  }

  /**
   * 
   * @return BarcodeDefinition
   */
  public function getBarcodeDefinition()
  {
    return $this->BarcodeDefinition;
  }

  /**
   * 
   * @param BarcodeDefinition $BarcodeDefinition
   */
  public function setBarcodeDefinition($BarcodeDefinition)
  {
    $this->BarcodeDefinition = $BarcodeDefinition;
  }

  /**
   * 
   * @return boolean
   */
  public function getColorPrintRequired()
  {
    return $this->ColorPrintRequired;
  }

  /**
   * 
   * @param boolean $ColorPrintRequired
   */
  public function setColorPrintRequired($ColorPrintRequired)
  {
    $this->ColorPrintRequired = $ColorPrintRequired;
  }

  /**
   * 
   * @return ErrorsType
   */
  public function getErrors()
  {
    return $this->Errors;
  }

  /**
   * 
   * @param ErrorsType $Errors
   */
  public function setErrors($Errors)
  {
    $this->Errors = $Errors;
  }

  /**
   * 
   * @return WarningsType
   */
  public function getWarnings()
  {
    return $this->Warnings;
  }

  /**
   * 
   * @param WarningsType $Warnings
   */
  public function setWarnings($Warnings)
  {
    $this->Warnings = $Warnings;
  }

}
