<?php

namespace Ibrows\PostBarcodeBundle\Soap\CustomClasses;


class FileInfos
{
    public $FrankingLicense;
    public $PpFranking;
    public $Customer;

    function __construct($FrankingLicense, $PpFranking = true, $Customer)
    {
        $this->Customer = $Customer;
        $this->FrankingLicense = $FrankingLicense;
        $this->PpFranking = $PpFranking;
    }


} 