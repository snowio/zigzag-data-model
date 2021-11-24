<?php
namespace SnowIO\ZigZagDataModel\Product;

class Price
{
    private $json = [];

    public static function of(string $countryCode)
    {
        $result = new self;
        $result->json['countryCode'] = $countryCode;
        return $result;
    }

    public function withCountryCode(string $countryCode): self
    {
        $result = clone $this;
        $result->json['countryCode'] = $countryCode;
        return $result;
    }

    public function withRrp(string $rrp): self
    {
        $result = clone $this;
        $result->json['rrp'] = $rrp;
        return $result;
    }

    public function withSellingPrice(float $sellingPrice): self
    {
        $result = clone $this;
        $result->json['sellingPrice'] = $sellingPrice;
        return $result;
    }

    public function withShippingCost(float $shippingCost): self
    {
        $result = clone $this;
        $result->json['shippingCost'] = $shippingCost;
        return $result;
    }

    public function withCostPrice(float $costPrice): self
    {
        $result = clone $this;
        $result->json['costPrice'] = $costPrice;
        return $result;
    }

    public function toJson(): array
    {
        return $this->json;
    }

    public function equals($other): bool
    {
        return $other instanceof self &&
            $other->json === $this->json;
    }

    private function __construct()
    {
    }
}
