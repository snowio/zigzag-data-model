<?php

namespace SnowIO\ZigZagDataModel\Order\Product;

class Price
{
    /** @var array $json */
    private $json;
    /** @var string$countryCode */
    private $countryCode;
    /** @var float|null $rrp */
    private $rrp;
    /** @var float|null $sellingPrice */
    private $sellingPrice;
    /** @var float|null $shippingCost */
    private $shippingCost;
    /** @var float|null $costPrice */
    private $costPrice;

    public static function create(): self
    {
        return new self;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Price
     */
    public function withCountryCode(string $countryCode): Price
    {
        $clone = clone $this;
        $clone->countryCode = $countryCode;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getRrp(): ?float
    {
        return $this->rrp;
    }

    /**
     * @param float|null $rrp
     * @return Price
     */
    public function withRrp(?float $rrp): Price
    {
        $clone = clone $this;
        $clone->rrp = $rrp;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getSellingPrice(): ?float
    {
        return $this->sellingPrice;
    }

    /**
     * @param float|null $sellingPrice
     * @return Price
     */
    public function withSellingPrice(?float $sellingPrice): Price
    {
        $clone = clone $this;
        $clone->sellingPrice = $sellingPrice;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getShippingCost(): ?float
    {
        return $this->shippingCost;
    }

    /**
     * @param float|null $shippingCost
     * @return Price
     */
    public function withShippingCost(?float $shippingCost): Price
    {
        $clone = clone $this;
        $clone->shippingCost = $shippingCost;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getCostPrice(): ?float
    {
        return $this->costPrice;
    }

    /**
     * @param float|null $costPrice
     * @return Price
     */
    public function withCostPrice(?float $costPrice): Price
    {
        $clone = clone $this;
        $clone->costPrice = $costPrice;
        return $clone;
    }

    public static function fromJson(array $json): self
    {
        $result = new self;
        $result->countryCode = $json['countryCode'];
        $result->rrp = $json['rrp'] ?? null;
        $result->sellingPrice = $json['sellingPrice'] ?? null;
        $result->shippingCost = $json['shippingCost'] ?? null;
        $result->costPrice = $json['costPrice'] ?? null;
        return $result;
    }

    public function toJson(): array
    {
        /**
         * Required
         */
        $this->json['countryCode'] = $this->getCountryCode();

        /**
         * Optional
         */
        if ($this->getRrp()) {
            $this->json['rrp'] = $this->getRrp();
        }
        if ($this->getSellingPrice()) {
            $this->json['sellingPrice'] = $this->getSellingPrice();
        }
        if ($this->getShippingCost()) {
            $this->json['shippingCost'] = $this->getShippingCost();
        }
        if ($this->getCostPrice()) {
            $this->json['costPrice'] = $this->getCostPrice();
        }

        return $this->json;
    }
}
