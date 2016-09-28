<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadLabelLayoutsResponse
{

  /**
   * 
   * @var LabelLayoutResponse $LabelLayout
   * @access public
   */
  public $LabelLayout = null;

  /**
   * 
   * @var ErrorsType $Errors
   * @access public
   */
  public $Errors = null;

  /**
   * 
   * @param LabelLayoutResponse $LabelLayout
   * @param ErrorsType $Errors
   * @access public
   */
  public function __construct($LabelLayout = null, $Errors = null)
  {
    $this->LabelLayout = $LabelLayout;
    $this->Errors = $Errors;
  }

  /**
   * 
   * @return LabelLayoutResponse
   */
  public function getLabelLayout()
  {
    return $this->LabelLayout;
  }

  /**
   * 
   * @param LabelLayoutResponse $LabelLayout
   */
  public function setLabelLayout($LabelLayout)
  {
    $this->LabelLayout = $LabelLayout;
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

}
