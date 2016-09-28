<?php

namespace Ibrows\PostBarcodeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class IbrowsPostBarcodeExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('ibrows_post_barcode.soap.wsdl', $config['soap']['wsdl']);
        $container->setParameter('ibrows_post_barcode.soap.dir', $config['soap']['dir']);
        $container->setParameter('ibrows_post_barcode.soap.namespace', $config['soap']['namespace']);
        $container->setParameter('ibrows_post_barcode.soap.endpoint', $config['soap']['endpoint']);
        $container->setParameter('ibrows_post_barcode.soap.username', $config['soap']['username']);
        $container->setParameter('ibrows_post_barcode.soap.password', $config['soap']['password']);
        $container->setParameter('ibrows_post_barcode.soap.frankingLicence', $config['soap']['frankingLicence']);
        $container->setParameter('ibrows_post_barcode.barcode.folder', $config['barcode']['folder']);


        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}