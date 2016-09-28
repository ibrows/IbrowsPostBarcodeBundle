<?php

namespace Ibrows\PostBarcodeBundle\Soap\Service;


abstract class AbstractSOAPService {
    /**
     * @var SoapClientFactory
     */
    protected $factory;

    protected $client;

    function __construct($factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param \Ibrows\PostBarcodeBundle\Soap\Service\SoapClientFactory $factory
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return \Ibrows\PostBarcodeBundle\Soap\Service\SoapClientFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }



} 