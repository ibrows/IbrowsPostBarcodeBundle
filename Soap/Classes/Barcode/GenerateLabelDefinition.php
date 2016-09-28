<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class GenerateLabelDefinition
{

  /**
   * 
   * @var PrintAddressesType $PrintAddresses
   * @access public
   */
  public $PrintAddresses = null;

  /**
   * 
   * @var ImageFileType $ImageFileType
   * @access public
   */
  public $ImageFileType = null;

  /**
   * 
   * @var int $ImageResolution
   * @access public
   */
  public $ImageResolution = null;

  /**
   * 
   * @var boolean $PrintPreview
   * @access public
   */
  public $PrintPreview = null;

  /**
   * 
   * @param PrintAddressesType $PrintAddresses
   * @param ImageFileType $ImageFileType
   * @param int $ImageResolution
   * @param boolean $PrintPreview
   * @access public
   */
  public function __construct($PrintAddresses = null, $ImageFileType = null, $ImageResolution = null, $PrintPreview = null)
  {
    $this->PrintAddresses = $PrintAddresses;
    $this->ImageFileType = $ImageFileType;
    $this->ImageResolution = $ImageResolution;
    $this->PrintPreview = $PrintPreview;
  }

  /**
   * 
   * @return PrintAddressesType
   */
  public function getPrintAddresses()
  {
    return $this->PrintAddresses;
  }

  /**
   * 
   * @param PrintAddressesType $PrintAddresses
   */
  public function setPrintAddresses($PrintAddresses)
  {
    $this->PrintAddresses = $PrintAddresses;
  }

  /**
   * 
   * @return ImageFileType
   */
  public function getImageFileType()
  {
    return $this->ImageFileType;
  }

  /**
   * 
   * @param ImageFileType $ImageFileType
   */
  public function setImageFileType($ImageFileType)
  {
    $this->ImageFileType = $ImageFileType;
  }

  /**
   * 
   * @return int
   */
  public function getImageResolution()
  {
    return $this->ImageResolution;
  }

  /**
   * 
   * @param int $ImageResolution
   */
  public function setImageResolution($ImageResolution)
  {
    $this->ImageResolution = $ImageResolution;
  }

  /**
   * 
   * @return boolean
   */
  public function getPrintPreview()
  {
    return $this->PrintPreview;
  }

  /**
   * 
   * @param boolean $PrintPreview
   */
  public function setPrintPreview($PrintPreview)
  {
    $this->PrintPreview = $PrintPreview;
  }

}
