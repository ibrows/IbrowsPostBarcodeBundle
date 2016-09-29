<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Sending
{
    /**
     *
     * @var Item $Item
     * @access public
     */
    public $Item = null;

    /**
     *
     * @param Item $Item
     * @access public
     */
    public function __construct($Item = null)
    {
        $this->Item = $Item;
    }

    /**
     *
     * @return Item
     */
    public function getItem()
    {
        return $this->Item;
    }

    /**
     *
     * @param Item $Item
     */
    public function setItem($Item)
    {
        $this->Item = $Item;
    }
}