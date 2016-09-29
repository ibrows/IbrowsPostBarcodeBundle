<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class GenerateLabel
{
    /**
     *
     * @var Language $Language
     * @access public
     */
    public $Language = null;

    /**
     *
     * @var Envelope $Envelope
     * @access public
     */
    public $Envelope = null;

    /**
     *
     * @param Language $Language
     * @param Envelope $Envelope
     * @access public
     */
    public function __construct($Language = null, $Envelope = null)
    {
        $this->Language = $Language;
        $this->Envelope = $Envelope;
    }

    /**
     *
     * @return Language
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     *
     * @param Language $Language
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
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