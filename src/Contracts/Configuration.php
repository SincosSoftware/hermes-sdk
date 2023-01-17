<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Contracts;

use Sincos\HermesSDK\Enums\Country;
use Sincos\HermesSDK\Enums\CustomerType;
use Sincos\HermesSDK\Enums\Language;

interface Configuration
{
    public function getStoreIdentifier(): string;
    public function getStoreApiToken(): ?string;
    public function getHermesBaseUrl(): string;
    public function getCheckoutCallbackUrl(): string;
    public function getDefaultCustomerType(): CustomerType;
    public function getDefaultLanguage(): Language;
    public function getDefaultCountry(): Country;
    public function getOrderCreatedCallbackUrl(): string;
    public function getLogoUrl(): ?string;
    public function getHomeUrl(): string;
}
