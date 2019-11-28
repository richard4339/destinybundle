<?php


namespace Destiny\ClientBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class DestinyClientExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('destiny_client.app.name', $config['app']['name']);
        $container->setParameter('destiny_client.app.version', $config['app']['version']);
        $container->setParameter('destiny_client.app.id_number', $config['app']['id_number']);
        $container->setParameter('destiny_client.app.url', $config['app']['url']);
        $container->setParameter('destiny_client.app.email', $config['app']['email']);
        $container->setParameter('destiny_client.httpclient.cache_location', $config['httpclient']['cache_location']);

        $definition = $container->getDefinition('destiny_client.client');
//        $definition->setArgument(0, $config['client_id']);
//        $definition->setArgument(1, $config['client_secret']);
    }
}