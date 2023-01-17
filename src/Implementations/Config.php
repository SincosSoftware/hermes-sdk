<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Implementations;

use Sincos\HermesSDK\Contracts\Configuration;
use Sincos\HermesSDK\Enums\Country;
use Sincos\HermesSDK\Enums\CustomerType;
use Sincos\HermesSDK\Enums\Language;

class Config implements Configuration
{
    public function getStoreIdentifier(): string
    {
        return '1338';
    }

    public function getStoreApiToken(): ?string
    {
        return '1|PQNPxtld7dt3TdfFjdp6MtY1zMuNhUYW2Sbs0gdn';
    }

    public function getHermesBaseUrl(): string
    {
        return 'http://hermes.test';
    }

    public function getDefaultCustomerType(): CustomerType
    {
        return CustomerType::b2c;
    }

    public function getDefaultLanguage(): Language
    {
        return Language::NORWEGIAN;
    }

    public function getDefaultCountry(): Country
    {
        return Country::NO;
    }

    public function getCheckoutCallbackUrl(): string
    {
        return 'http://foff.test/checkout-callback';
    }

    public function getOrderCreatedCallbackUrl(): string
    {
        return 'http://foff.test/order-created-callback';
    }

    public function getLogoUrl(): ?string
    {
        return 'https://jaktfall.no/bilder_diverse/1392280182.png';
    }

    public function getHomeUrl(): string
    {
        return 'http://foff.test';
    }
}
