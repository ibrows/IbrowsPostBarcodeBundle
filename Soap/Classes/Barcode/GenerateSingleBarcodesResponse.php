<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class GenerateSingleBarcodesResponse
{
    /**
     *
     * @var Envelope $Envelope
     * @access public
     */
    public $Envelope = null;

    /**
     *
     * @param Envelope $Envelope
     * @access public
     */
    public function __construct($Envelope = null)
    {
        $this->Envelope = $Envelope;
    }

    /**
     *
     * @return Envelope
     */
    public function getEnvelope()
    {
        return $this->Envelope;
    }

    /**
     *
     * @param Envelope $Envelope
     */
    public function setEnvelope($Envelope)
    {
        $this->Envelope = $Envelope;
    }
}