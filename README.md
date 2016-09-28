IbrowsPostBarcodeBundle - Create Barcodes from the Swiss Post
=============================================================

The IbrowsPostBarcodeBundle allows you to create letter and package barcodes through the swiss post API.
more information under: http://www.post.ch/post-barcode-cug


Install and setup the bundle
----------------------------

1.  Fetch the source code


    ``` bash
    $ php composer.phar require ibrows/post_barcode_bundle
    ```

    Composer will install the bundle to your project's `ibrows/post_barcode_bundle` directory.


2.  Add the bundle to your `AppKernel` class

    ``` php

    // app/AppKernerl.php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Ibrows\PostBarcodeBundle\IbrowsPostBarcodeBundle(),
            // ...
        );
        // ...
    }
    
    ```

Configuration
-------------

### Setup credentials, paths and entities
``` yaml
    ibrows_post_barcode:
        soap:
            wsdl: '%kernel.root_dir%/../vendor/ibrows/post_barcode_bundle/Soap/wsdl'
            dir: '%kernel.root_dir%/../vendor/ibrows/post_barcode_bundle/Soap/Classes'
            namespace: 'Ibrows\PostBarcodeBundle\Soap\classes'
            endpoint: "https://wsbc.post.ch/wsbc/barcode/v2_2"
            username: <postApiUser>
            password: <postApiPassword>
            frankingLicence: <frankingLicenceNumber>
    
        barcode:
            folder: '%kernel.root_dir%/../web/barcodes'
```

Usage example
-------------
``` php
    $recipient = new Address();
    $recipient->setCountry('CH');
    $recipient->setCity('Zürich');
    $recipient->setCompany('iBROWS AG');
    $recipient->setFirstName('Manuel');
    $recipient->setLastName('Knobel');
    $recipient->setPrimaryStreet('Seestrasse 356');
    $recipient->setZipCode('8038');
    $recipient->setTitle(Address::MISTER);

    $customer = clone $recipient;

    $service = $this->getContainer()->get('ibrows_post_barcode.soap.client.service.barcode');
    $service->generateLabel($recipient, $customer);
```