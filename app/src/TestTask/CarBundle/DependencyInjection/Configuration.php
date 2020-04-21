<?php

namespace App\TestTask\CarBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('car');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('engine')->end()
                ->scalarNode('body')->end()
                ->scalarNode('transmission')->end()
                ->scalarNode('interior')->end()
                ->scalarNode('color')->end()
                ->scalarNode('options')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}