<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Contracts;

use Illuminate\Contracts\Support\Arrayable;
use Sincos\HermesSDK\Enums\BuyableType;

interface Buyable extends Arrayable
{
    public function getUniqueIdentifier(): string;
    public function getType(): BuyableType;
    public function getTitle(): string;
    public function getQuantity(): int;
    public function getGrossPricePerUnit(): int;
    public function getNetPricePerUnit(): int;
    public function getAllowQuantityChange(): bool;
    public function getSubtitle(): ?string;
    public function getUrl(): ?string;
    public function getImageUrl(): ?string;

    /**
     * A serialized or json encoded representation that is passed trough the whole hermes process,
     * and not modified by hermes.
     * @return string|null
     */
    public function getMerchantAdditionalData(): ?string;
    public function toArray(): array;
}
