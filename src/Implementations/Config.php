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
        return '4|BsG1By1zv1oO5pm27L4B2L08dh88wPOPn3vtfpDw';
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
}
