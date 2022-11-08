<?php

namespace Mld\NftPortBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class MldNftPortBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
    
    public function configure(DefinitionConfigurator $definition): void
    {
        /**
         * @formatter:off
         */
        $definition->rootNode()
                    ->children()
                        ->arrayNode('nft_port')
                            ->children()
                                ->scalarNode('api_key')
                                    ->isRequired()
                                    ->cannotBeEmpty()
                                ->end()
                            ->end()
                        ->end()
                    ->end();
        /**
         * @formatter:on
         */
    }
    
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.yaml');
        $container->services()
                  ->get('mld_nft_port.api.nft_port_api')
                  ->arg(0, $config['nft_port']['api_key']);
    }
    
}