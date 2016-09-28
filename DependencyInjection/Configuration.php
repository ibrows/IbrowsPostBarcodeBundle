<?php

namespace Ibrows\PostBarcodeBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ibrows_post_barcode');

        $rootNode
            ->children()
                ->arrayNode('soap')
                    ->children()
                        ->scalarNode('wsdl')->isRequired()->end()
                        ->scalarNode('dir')->isRequired()->end()
                        ->scalarNode('namespace')->isRequired()->end()
                        ->scalarNode('endpoint')->isRequired()->end()
                        ->scalarNode('username')->isRequired()->end()
                        ->scalarNode('password')->isRequired()->end()
                        ->scalarNode('frankingLicence')->isRequired()->end()
                    ->end()
                ->end()
                ->arrayNode('barcode')
                    ->children()
                        ->scalarNode('folder')->isRequired()->cannotBeEmpty()->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
