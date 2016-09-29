<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Data
{
    /**
     *
     * @var Provider $Provider
     * @access public
     */
    public $Provider = null;

    /**
     *
     * @param Provider $Provider
     * @access public
     */
    public function __construct($Provider = null)
    {
        $this->Provider = $Provider;
    }

    /**
     *
     * @return Provider
     */
    public function getProvider()
    {
        return $this->Provider;
    }

    /**
     *
     * @param Provider $Provider
     */
    public function setProvider($Provider)
    {
        $this->Provider = $Provider;
    }
}