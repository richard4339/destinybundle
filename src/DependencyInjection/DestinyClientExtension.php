<?php


namespace Destiny\ClientBundle\DependencyInjection;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class DestinyClientExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

//        $definition = $container->getDefinition('destiny.client_id');
//        $definition->replaceArgument(0, $config['twitter']['client_id']);
//        $definition->replaceArgument(1, $config['twitter']['client_secret']);
    }
}