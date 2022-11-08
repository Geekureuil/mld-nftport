<?php

namespace Mld\NftPortBundle\Api;

class NftPortApi
{
    /**
     * @var ?string clef API
     * Trouvable là => https://dashboard.nftport.xyz/api-key
     */
    private ?string $apiKey;
    
    /**
     * @param string|null $apiKey
     */
    public function __construct(?string $apiKey = null)
    {
        $this->apiKey = $apiKey;
    }
}