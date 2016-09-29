<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class Provider
{
    public $Sending;

    function __construct($Sending)
    {
        $this->Sending = $Sending;
    }
}