<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class Sending
{
    public $Item;

    function __construct($Item)
    {
        $this->Item = $Item;
    }
}