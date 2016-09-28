<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class Data
{
    public $Provider;

    function __construct($Provider)
    {
        $this->Provider = $Provider;
    }


} 