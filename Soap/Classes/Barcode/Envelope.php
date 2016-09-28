<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Envelope
{

  /**
   * 
   * @var LabelDefinition $LabelDefinition
   * @access public
   */
  public $LabelDefinition = null;

  /**
   * 
   * @var Data $Data
   * @access public
   */
  public $Data = null;

  /**
   * 
   * @param LabelDefinition $LabelDefinition
   * @param Data $Data
   * @access public
   */
  public function __construct($LabelDefinition = null, $Data = null)
  {
    $this->LabelDefinition = $LabelDefinition;
    $this->Data = $Data;
  }

  /**
   * 
   * @return LabelDefinition
   */
  public function getLabelDefinition()
  {
    return $this->LabelDefinition;
  }

  /**
   * 
   * @param LabelDefinition $LabelDefinition
   */
  public function setLabelDefinition($LabelDefinition)
  {
    $this->LabelDefinition = $LabelDefinition;
  }

  /**
   * 
   * @return Data
   */
  public function getData()
  {
    return $this->Data;
  }

  /**
   * 
   * @param Data $Data
   */
  public function setData($Data)
  {
    $this->Data = $Data;
  }

}
