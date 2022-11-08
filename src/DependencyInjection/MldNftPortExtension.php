<?php /** @noinspection PhpParamsInspection */

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class MldNftPortExtension extends Extension
{
    
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config        = $this->processConfiguration($configuration, $configs);
        
        $container->setParameter('mld_nft_port.nft_port.api_key', $config['nft-port']['api_key']);
    }
}