<?php declare(strict_types=1);

namespace Sincos\HermesSDK\Implementations;

use Illuminate\Contracts\Support\Arrayable;
use Sincos\HermesSDK\Contracts\Buyable;
use Sincos\HermesSDK\Enums\BuyableType;

class CartItem implements Buyable
{
    public function __construct(
        public readonly BuyableType $type,
        public readonly string $uniqueIdentifier,
        public readonly string $title,
        public readonly int $quantity,
        public readonly int $pricePerUnit,
        public readonly float $vatRate,
        public readonly bool $allowQuantityChange,
        public readonly ?string $subtitle = null,
        public readonly ?string $url = null,
        public readonly ?string $imageUrl = null,
        public readonly ?string $merchantAdditionalData = null,
    ){}

    public function toArray(): array
    {
        return [
            'type' => $this->type->value,
            'unique_identifier' => $this->uniqueIdentifier,
            'title' => $this->title,
            'quantity' => $this->quantity,
            'price_per_unit' => $this->pricePerUnit,
            'vat_rate' => $this->vatRate,
            'allow_quantity_change' => $this->allowQuantityChange,
            'subtitle' => $this->subtitle,
            'url' => $this->url,
            'image_url' => $this->imageUrl,
            'merchant_additional_data' => $this->merchantAdditionalData,
        ];
    }

    public function getUniqueIdentifier(): string
    {
        return $this->uniqueIdentifier;
    }

    public function getType(): BuyableType
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getPricePerUnit(): int
    {
        return $this->pricePerUnit;
    }

    public function getVatRate(): float
    {
        return $this->vatRate;
    }

    public function getAllowQuantityChange(): bool
    {
        return $this->allowQuantityChange;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function getMerchantAdditionalData(): ?string
    {
        return $this->merchantAdditionalData;
    }
}
