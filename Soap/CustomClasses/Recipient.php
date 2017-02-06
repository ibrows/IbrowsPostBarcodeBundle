<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class Recipient
{
    public $Name1;
    public $Name2;
    public $Street;
    public $ZIP;
    public $City;
    public $Country;
    public $Mobile;
    public $EMail;

    function __construct($Name1, $Street, $ZIP, $City, $Mobile, $EMail, $Name2)
    {
        $this->City = $City;
        $this->EMail = $EMail;
        $this->Mobile = $Mobile;
        $this->Name1 = $Name1;
        $this->Street = $Street;
        $this->ZIP = $ZIP;
        $this->Name2 = $Name2;
    }
}