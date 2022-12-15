<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Implementations;

use Sincos\HermesSDK\Enums\Country;

class Address implements \Sincos\HermesSDK\Contracts\Address
{
    public function __construct(
        public readonly Country $country,
        public readonly ?string $state = null,
        public readonly ?string $city = null,
        public readonly ?string $postalCode = null,
        public readonly ?string $street = null,
        public readonly ?string $street2 = null
    ){}

    public function getCountry(): Country
    {
        return $this->country;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function getStreet2(): ?string
    {
        return $this->street2;
    }

    public function toArray(): array
    {
        return [
            'country' => $this->country->value,
            'state' => $this->state,
            'city' => $this->city,
            'postal_code' => $this->postalCode,
            'street' => $this->street,
            'street2' => $this->street2,
        ];
    }
}
