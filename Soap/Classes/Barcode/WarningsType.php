<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class WarningsType
{
    /**
     *
     * @var MessageType $Warning
     * @access public
     */
    public $Warning = null;

    /**
     *
     * @param MessageType $Warning
     * @access public
     */
    public function __construct($Warning = null)
    {
        $this->Warning = $Warning;
    }

    /**
     *
     * @return MessageType
     */
    public function getWarning()
    {
        return $this->Warning;
    }

    /**
     *
     * @param MessageType $Warning
     */
    public function setWarning($Warning)
    {
        $this->Warning = $Warning;
    }
}