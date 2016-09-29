<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class SingleBarcodesDefinition
{
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
     * @param ImageFileType $ImageFileType
     * @param int $ImageResolution
     * @access public
     */
    public function __construct($ImageFileType = null, $ImageResolution = null)
    {
        $this->ImageFileType = $ImageFileType;
        $this->ImageResolution = $ImageResolution;
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