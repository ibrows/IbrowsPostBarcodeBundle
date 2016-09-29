<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ErrorsType
{
    /**
     *
     * @var MessageType $Error
     * @access public
     */
    public $Error = null;

    /**
     *
     * @param MessageType $Error
     * @access public
     */
    public function __construct($Error = null)
    {
        $this->Error = $Error;
    }

    /**
     *
     * @return MessageType
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     *
     * @param MessageType $Error
     */
    public function setError($Error)
    {
        $this->Error = $Error;
    }
}