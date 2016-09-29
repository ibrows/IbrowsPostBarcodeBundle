<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Attributes
{
    /**
     *
     * @var PRZLType $PRZL
     * @access public
     */
    public $PRZL = null;

    /**
     *
     * @param PRZLType $PRZL
     * @access public
     */
    public function __construct($PRZL = null)
    {
        $this->PRZL = $PRZL;
    }

    /**
     *
     * @return PRZLType
     */
    public function getPRZL()
    {
        return $this->PRZL;
    }

    /**
     *
     * @param PRZLType $PRZL
     */
    public function setPRZL($PRZL)
    {
        $this->PRZL = $PRZL;
    }
}