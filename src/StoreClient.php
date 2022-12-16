<?php declare(strict_types=1);

namespace Sincos\HermesSDK;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Sincos\HermesSDK\Contracts\{Configuration};

class StoreClient
{
    public function __construct(public readonly Configuration $configuration){}

    public function register(): Response
    {
        $baseUrl = $this->configuration->getHermesBaseUrl();

        return Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])
            ->post("$baseUrl/api/store", [
                "store_id" => $this->configuration->getStoreIdentifier()
            ]);
    }
}
