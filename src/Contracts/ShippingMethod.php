<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Contracts;

use Illuminate\Contracts\Support\Arrayable;

interface ShippingMethod extends Arrayable
{
    public function getUniqueIdentifier(): string;
    public function getTitle(): string;
    public function getNetPrice(): int;
    public function getGrossPrice(): int;
    public function getLogoUrl(): ?string;
    public function getMerchantAdditionalData(): ?string;
    public function toArray(): array;
}
