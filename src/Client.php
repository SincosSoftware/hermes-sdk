<?php declare(strict_types=1);

namespace Sincos\HermesSDK;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Sincos\HermesSDK\Contracts\{Address, Buyable, Configuration, Customer, ShippingMethod};
use Illuminate\Support\Collection;
use Sincos\HermesSDK\Enums\{Currency, Language};

class Client
{
    private ?Collection $shippingMethods = null;
    private ?Customer $customer = null;
    private ?Address $address = null;
    private ?Collection $cartItems;
    private ?Language $language;

    public function __construct(
        public readonly Configuration $configuration,
        public readonly Currency $currency,
    ){}

    public function withCustomer(Customer $customer): static
    {
        $this->customer = $customer;
        return $this;
    }

    public function withAddress(Address $address): static
    {
        $this->address = $address;
        return $this;
    }

    public function withCartItems(Buyable ...$buyable): static
    {
        $this->cartItems = collect($buyable);
        return $this;
    }

    public function withLanguage(Language $language): static
    {
        $this->language = $language;
        return $this;
    }

    public function withShippingMethods(Shippingmethod ...$shippingMethods): static
    {
        $this->shippingMethods = collect($shippingMethods);
        return $this;
    }

    public function create(): Response
    {
        $baseUrl = $this->configuration->getHermesBaseUrl();

        return Http::withToken($this->configuration->getStoreApiKey())
            ->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])
            ->post("$baseUrl/api/cart", $this->prepareRequest());
    }

    public function update(string $cartUuid): Response
    {
        $baseUrl = $this->configuration->getHermesBaseUrl();

        return Http::withToken($this->configuration->getStoreApiKey())
            ->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])
            ->put("$baseUrl/api/cart/$cartUuid", $this->prepareRequest());
    }

    public static function get(Configuration $configuration, string $cartUuid): Response
    {
        $baseUrl = $configuration->getHermesBaseUrl();

        return Http::withToken($configuration->getStoreApiKey())
            ->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])
            ->get("$baseUrl/api/cart/$cartUuid");
    }

    private function prepareRequest(): array
    {
        return [
            'cart_items' => $this->cartItems->toArray(),
            'currency' => $this->currency->value,
            'language' => $this->language?->value ?? $this->configuration->getDefaultLanguage()->value,
            'customer' => $this->customer?->toArray() ?? ['type' => $this->configuration->getDefaultCustomerType()->value],
            'address' => $this->address?->toArray() ?? ['country' => $this->configuration->getDefaultCountry()->value],
            'shipping_methods' => $this->shippingMethods?->toArray() ?? null
        ];
    }

}
