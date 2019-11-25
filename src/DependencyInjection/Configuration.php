<?php

namespace Destiny\ClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('destiny_client');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('default')
                    ->children()
                        ->scalarNode('membership_type')->end()
                        ->scalarNode('membership_id')->end()
                        ->scalarNode('character_id')->end()
                    ->end()
                ->end() // default
                ->arrayNode('app')
                    ->children()
                        ->scalarNode('name')->end()
                        ->scalarNode('version')->end()
                        ->scalarNode('id_number')->end()
                        ->scalarNode('url')->end()
                        ->scalarNode('email')->end()
                    ->end()
                ->end() // app
            ->end()
        ;

        return $treeBuilder;
    }

}