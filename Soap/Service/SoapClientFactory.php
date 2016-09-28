<?php

namespace Ibrows\PostBarcodeBundle\Soap\Service;


use Ibrows\PostBarcodeBundle\Soap\Classes\Barcode\BarcodeService;

class SoapClientFactory {
    /**
     * @var string
     */
    protected $wsdlDir;

    /**
     * @var array
     */
    protected $options = array();

    /**
     * @param string $wsdlDir
     * @param array $options
     * @throws \InvalidArgumentException
     */
    public function __construct($wsdlDir, array $options = array())
    {
        if(!is_dir($wsdlDir)){
            throw new \InvalidArgumentException("WsdlDir $wsdlDir invalid");
        }
        $this->wsdlDir = realpath($wsdlDir);
        $this->options = $options;
    }

    /**
     * @return BarcodeService
     */
    public function getBarcodeSoapClient(){
        return new BarcodeService($this->getOptions(), $this->getWsdlPath('barcode_v2_2'));
    }

    /**
     * @param string $wsdlName
     * @return string
     * @throws \InvalidArgumentException
     */
    protected function getWsdlPath($wsdlName)
    {
        $path = $this->getWsdlDir().'/'. $wsdlName.'.wsdl';
        if(!file_exists($path)){
            throw new \InvalidArgumentException("File $path invalid");
        }
        return $path;
    }

    /**
     * @return array
     */
    protected function getOptions()
    {
        return $this->options;
    }

    /**
     * @return string
     */
    protected function getWsdlDir()
    {
        return $this->wsdlDir;
    }
} 