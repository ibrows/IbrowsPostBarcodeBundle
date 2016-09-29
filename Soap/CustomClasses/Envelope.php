<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class Envelope
{
    public $LabelDefinition;
    public $FileInfos;
    public $Data;

    function __construct($Data=null, $FileInfos=null, $LabelDefinition=null)
    {
        $this->Data = $Data;
        $this->FileInfos = $FileInfos;
        $this->LabelDefinition = $LabelDefinition;
    }
}