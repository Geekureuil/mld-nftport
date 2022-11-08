<?php

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class NftPortApi
{
    /**
     * @var string clef API
     * Trouvable là => https://dashboard.nftport.xyz/api-key
     */
    private string $apiKey;
    
    /**
     * @var ParameterBagInterface
     */
    private ParameterBagInterface $parameterBag;
    
    /**
     * @param string|null           $apiKey
     * @param ParameterBagInterface $parameterBag
     */
    public function __construct(?string $apiKey, ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
        $this->apiKey       = ($apiKey === null) ? $this->parameterBag->get('mld_nft_port.nft_port.api_key') : $apiKey;
    }
    
}