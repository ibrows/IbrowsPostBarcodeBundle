<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class Item
{
    public $ItemID;
    public $Recipient;
    public $Attributes;

    function __construct($ItemID, $Recipient, $Attributes)
    {
        $this->ItemID = $ItemID;
        $this->Recipient = $Recipient;
        $this->Attributes = $Attributes;
    }
}