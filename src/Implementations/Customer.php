<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Implementations;

use Sincos\HermesSDK\Enums\CustomerType;

class Customer implements \Sincos\HermesSDK\Contracts\Customer
{
    public function __construct(
        public readonly CustomerType $type,
        public readonly ?string $firstName = null,
        public readonly ?string $lastName = null,
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
        public readonly ?string $companyName = null,
        public readonly ?string $companyIdentifier = null,
    ){}
    public function getType(): CustomerType
    {
        return $this->type;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function getCompanyIdentifier(): ?string
    {
        return $this->companyIdentifier;
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type->value,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'company_name' => $this->companyName,
            'company_identifier' => $this->companyIdentifier,
        ];
    }
}
