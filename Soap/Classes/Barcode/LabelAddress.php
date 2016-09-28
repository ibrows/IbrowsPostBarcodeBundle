<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class LabelAddress
{

  /**
   * 
   * @var RecipientAddressType $LabelLine
   * @access public
   */
  public $LabelLine = null;

  /**
   * 
   * @param RecipientAddressType $LabelLine
   * @access public
   */
  public function __construct($LabelLine = null)
  {
    $this->LabelLine = $LabelLine;
  }

  /**
   * 
   * @return RecipientAddressType
   */
  public function getLabelLine()
  {
    return $this->LabelLine;
  }

  /**
   * 
   * @param RecipientAddressType $LabelLine
   */
  public function setLabelLine($LabelLine)
  {
    $this->LabelLine = $LabelLine;
  }

}
