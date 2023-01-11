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
        return '1|CPV3F4BgZX2M7M3SFAOP89Y6Ug4ztV3dqAbaDqTW';
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
}
