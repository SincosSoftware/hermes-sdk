<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use Sincos\HermesSDK\Enums\CustomerType;

interface Customer extends Arrayable
{
    public function getType(): CustomerType;
    public function getFirstName(): ?string;
    public function getLastName(): ?string;
    public function getEmail(): ?string;
    public function getPhone(): ?string;
    public function getCompanyName(): ?string;
    public function getCompanyIdentifier(): ?string;
    public function toArray(): array;
}
