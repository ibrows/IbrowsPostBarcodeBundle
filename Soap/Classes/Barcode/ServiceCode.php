<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ServiceCode
{
    /**
     *
     * @var PRZLType $PRZL
     * @access public
     */
    public $PRZL = null;

    /**
     *
     * @var DescriptionType $Description
     * @access public
     */
    public $Description = null;

    /**
     *
     * @param PRZLType $PRZL
     * @param DescriptionType $Description
     * @access public
     */
    public function __construct($PRZL = null, $Description = null)
    {
        $this->PRZL = $PRZL;
        $this->Description = $Description;
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

    /**
     *
     * @return DescriptionType
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     *
     * @param DescriptionType $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }
}