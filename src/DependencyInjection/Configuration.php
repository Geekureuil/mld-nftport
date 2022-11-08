<?php /** @noinspection PhpParamsInspection */

namespace Mld\NftPortBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('mld_nft_port');
        /**
         * @formatter:off
         */
        $treeBuilder->getRootNode()
                    ->children()
                        ->arrayNode('nft-port')
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
        
        return $treeBuilder;
    }
}