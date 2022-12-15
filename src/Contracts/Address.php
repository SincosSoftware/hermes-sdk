<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Contracts;

use Sincos\HermesSDK\Enums\Country;

interface Address
{
    public function getCountry(): Country;
    public function getState(): ?string;
    public function getCity(): ?string;
    public function getPostalCode(): ?string;
    public function getStreet(): ?string;
    public function getStreet2(): ?string;
    public function toArray(): array;
}
