<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class Customer
{
    public $Name1;
    public $Street;
    public $POBox;
    public $ZIP;
    public $City;
    public $Country;
    public $DomicilePostOffice;

    function __construct($Name1, $Street, $POBox, $ZIP, $City, $Country, $DomicilePostOffice)
    {
        $this->City = $City;
        $this->Country = $Country;
        $this->DomicilePostOffice = $DomicilePostOffice;
        $this->Name1 = $Name1;
        $this->POBox = $POBox;
        $this->Street = $Street;
        $this->ZIP = $ZIP;
    }
}