<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class LabelDefinition
{
    public $LabelLayout;
    public $PrintAddresses;
    public $ImageFileType;
    public $ImageResolution;
    public $PrintPreview;

    function __construct($LabelLayout, $PrintAddresses='RecipientAndCustomer', $ImageFileType='PNG', $ImageResolution=200, $PrintPreview=false)
    {
        $this->ImageFileType = $ImageFileType;
        $this->ImageResolution = $ImageResolution;
        $this->LabelLayout = $LabelLayout;
        $this->PrintAddresses = $PrintAddresses;
        $this->PrintPreview = $PrintPreview;
    }


} 