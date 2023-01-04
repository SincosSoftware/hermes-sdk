<?php declare(strict_types=1);

namespace Sincos\HermesSDK;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Sincos\HermesSDK\Contracts\{Configuration};

class StoreClient
{
    public function __construct(public readonly Configuration $configuration){}

    /**
     * Register the store, and retrieve the API token.
     * NOTE: Currently you cant recover the api token after creation, so make sure you store it.
     * @return \Illuminate\Http\Client\Response
     */
    public function register(): Response
    {
        $baseUrl = $this->configuration->getHermesBaseUrl();

        return Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])
            ->post("$baseUrl/api/store", [
                "store_id" => $this->configuration->getStoreIdentifier(),
                'configuration' => [
                    'callback_urls' => [
                        'checkout_update' => $this->configuration->getCheckoutCallbackUrl()
                    ]
                ]
            ]);
    }
}
