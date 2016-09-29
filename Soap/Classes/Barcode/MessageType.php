<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class MessageType
{
    /**
     *
     * @var MessageCodeType $Code
     * @access public
     */
    public $Code = null;

    /**
     *
     * @var MessageTextType $Message
     * @access public
     */
    public $Message = null;

    /**
     *
     * @param MessageCodeType $Code
     * @param MessageTextType $Message
     * @access public
     */
    public function __construct($Code = null, $Message = null)
    {
        $this->Code = $Code;
        $this->Message = $Message;
    }

    /**
     *
     * @return MessageCodeType
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     *
     * @param MessageCodeType $Code
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
    }

    /**
     *
     * @return MessageTextType
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     *
     * @param MessageTextType $Message
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
    }
}