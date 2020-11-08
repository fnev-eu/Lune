<?php

namespace Fneveu\Bundle\LuneBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('lune');
        $rootNode    = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->booleanNode('display_copyright')->defaultTrue()->info('Display fnev.eu reference in footer in BO')->end()
                ->scalarNode('backend_dir_name')->defaultValue('AdminArea')->info('Folder where controllers etc. will be created')->end()
                ->scalarNode('backend_route_path')->defaultValue('lune-admin')->info('Blabla')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
