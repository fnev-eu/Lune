<?php

namespace Fneveu\Bundle\LuneBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class FneveuLuneExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config        = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('fneveu_lune.maker.make_crud');
        $definition
            ->setArgument(2, $config['backend_dir_name'])
            ->setArgument(3, $config['backend_route_path'])
        ;
    }

    public function getAlias()
    {
        return 'lune';
    }
}
