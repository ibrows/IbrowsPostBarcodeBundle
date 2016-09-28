<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class LabelDefinition
{

  /**
   * 
   * @var LabelLayoutType $LabelLayout
   * @access public
   */
  public $LabelLayout = null;

  /**
   * 
   * @param LabelLayoutType $LabelLayout
   * @access public
   */
  public function __construct($LabelLayout = null)
  {
    $this->LabelLayout = $LabelLayout;
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

}
