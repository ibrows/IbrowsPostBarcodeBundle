<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class BarcodeDefinition
{

  /**
   * 
   * @var BarcodeType $BarcodeType
   * @access public
   */
  public $BarcodeType = null;

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
   * @param BarcodeType $BarcodeType
   * @param ImageFileType $ImageFileType
   * @param int $ImageResolution
   * @access public
   */
  public function __construct($BarcodeType = null, $ImageFileType = null, $ImageResolution = null)
  {
    $this->BarcodeType = $BarcodeType;
    $this->ImageFileType = $ImageFileType;
    $this->ImageResolution = $ImageResolution;
  }

  /**
   * 
   * @return BarcodeType
   */
  public function getBarcodeType()
  {
    return $this->BarcodeType;
  }

  /**
   * 
   * @param BarcodeType $BarcodeType
   */
  public function setBarcodeType($BarcodeType)
  {
    $this->BarcodeType = $BarcodeType;
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

}
