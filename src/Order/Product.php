<?php

namespace SnowIO\ZigZagDataModel\Order;

use SnowIO\ZigZagDataModel\Order\Product\PriceCollection;;
use SnowIO\ZigZagDataModel\Order\Product\ProductInformationCollection;
use SnowIO\ZigZagDataModel\Order\Product\RetailerProductInfo;

class Product
{
    /** @var array $json */
    private $json;
    /** @var string $sku */
    private $sku;
    /** @var string|null $masterSku */
    private $masterSku = null;
    /** @var string|null $brand */
    private $brand = null;
    /** @var string|null $googleProductCategory */
    private $googleProductCategory = null;
    /** @var string $gtin */
    private $gtin;
    /** @var string|null $mpn */
    private $mpn = null;
    /** @var string|null $hsCode */
    private $hsCode = null;
    /** @var string|null $importHSCode */
    private $importHSCode = null;
    /** @var string|null $gbEori */
    private $gbEori = null;
    /** @var string|null $euEori */
    private $euEori = null;
    /** @var string|null $xiEori */
    private $xiEori = null;
    /** @var string|null $customsProcedureCode */
    private $customsProcedureCode = null;
    /** @var string|null $returnsGoodsRelief */
    private $returnsGoodsRelief = null;
    /** @var string|null $condition */
    private $condition = null;
    /** @var string|null $availability */
    private $availability = null;
    /** @var string[]|null $additionalImages */
    private $additionalImages = null;
    /** @var string|null $salePriceEffectiveDate */
    private $salePriceEffectiveDate = null;
    /** @var int $quantity */
    private $quantity;
    /** @var float $price */
    private $price;
    /** @var float|null $itemWeight */
    private $itemWeight = null;
    /** @var bool|null $eligibleForFreeShipping */
    private $eligibleForFreeShipping = null;
    /** @var string|null $warehouseDcCode */
    private $warehouseDcCode = null;
    /** @var bool|null $isExchangeable */
    private $isExchangeable = null;
    /** @var string|null $orderLineItemNumber */
    private $orderLineItemNumber = null;
    /** @var float|null $vatRate */
    private $vatRate = null;
    /** @var float|null $vatValue */
    private $vatValue = null;
    /** @var RetailerProductInfo|null $retailerProductInfo */
    private $retailerProductInfo = null;
    /** @var ProductInformationCollection $productInformation */
    private $productInformation;
    /** @var PriceCollection|null $prices */
    private $prices = null;

    public static function create(): self
    {
        return new self;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     * @return Product
     */
    public function withSku(string $sku): Product
    {
        $clone = clone $this;
        $clone->sku = $sku;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getMasterSku(): ?string
    {
        return $this->masterSku;
    }

    /**
     * @param string|null $masterSku
     * @return Product
     */
    public function withMasterSku(?string $masterSku): Product
    {
        $clone = clone $this;
        $clone->masterSku = $masterSku;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     * @return Product
     */
    public function withBrand(?string $brand): Product
    {
        $clone = clone $this;
        $clone->brand = $brand;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getGoogleProductCategory(): ?string
    {
        return $this->googleProductCategory;
    }

    /**
     * @param string|null $googleProductCategory
     * @return Product
     */
    public function withGoogleProductCategory(?string $googleProductCategory): Product
    {
        $clone = clone $this;
        $clone->googleProductCategory = $googleProductCategory;
        return $clone;
    }

    /**
     * @return string
     */
    public function getGtin(): string
    {
        return $this->gtin;
    }

    /**
     * @param string $gtin
     * @return Product
     */
    public function withGtin(string $gtin): Product
    {
        $clone = clone $this;
        $clone->gtin = $gtin;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    /**
     * @param string|null $mpn
     * @return Product
     */
    public function withMpn(?string $mpn): Product
    {
        $clone = clone $this;
        $clone->mpn = $mpn;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }

    /**
     * @param string|null $hsCode
     * @return Product
     */
    public function withHsCode(?string $hsCode): Product
    {
        $clone = clone $this;
        $clone->hsCode = $hsCode;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getImportHSCode(): ?string
    {
        return $this->importHSCode;
    }

    /**
     * @param string|null $importHSCode
     * @return Product
     */
    public function withImportHSCode(?string $importHSCode): Product
    {
        $clone = clone $this;
        $clone->importHSCode = $importHSCode;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getGbEori(): ?string
    {
        return $this->gbEori;
    }

    /**
     * @param string|null $gbEori
     * @return Product
     */
    public function withGbEori(?string $gbEori): Product
    {
        $clone = clone $this;
        $clone->gbEori = $gbEori;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getEuEori(): ?string
    {
        return $this->euEori;
    }

    /**
     * @param string|null $euEori
     * @return Product
     */
    public function withEuEori(?string $euEori): Product
    {
        $clone = clone $this;
        $clone->euEori = $euEori;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getXiEori(): ?string
    {
        return $this->xiEori;
    }

    /**
     * @param string|null $xiEori
     * @return Product
     */
    public function withXiEori(?string $xiEori): Product
    {
        $clone = clone $this;
        $clone->xiEori = $xiEori;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCustomsProcedureCode(): ?string
    {
        return $this->customsProcedureCode;
    }

    /**
     * @param string|null $customsProcedureCode
     * @return Product
     */
    public function withCustomsProcedureCode(?string $customsProcedureCode): Product
    {
        $clone = clone $this;
        $clone->customsProcedureCode = $customsProcedureCode;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getReturnsGoodsRelief(): ?string
    {
        return $this->returnsGoodsRelief;
    }

    /**
     * @param string|null $returnsGoodsRelief
     * @return Product
     */
    public function withReturnsGoodsRelief(?string $returnsGoodsRelief): Product
    {
        $clone = clone $this;
        $clone->returnsGoodsRelief = $returnsGoodsRelief;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    /**
     * @param string|null $condition
     * @return Product
     */
    public function withCondition(?string $condition): Product
    {
        $clone = clone $this;
        $clone->condition = $condition;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getAvailability(): ?string
    {
        return $this->availability;
    }

    /**
     * @param string|null $availability
     * @return Product
     */
    public function withAvailability(?string $availability): Product
    {
        $clone = clone $this;
        $clone->availability = $availability;
        return $clone;
    }

    /**
     * @return string[]|null
     */
    public function getAdditionalImages(): ?array
    {
        return $this->additionalImages;
    }

    /**
     * @param string[]|null $additionalImages
     * @return Product
     */
    public function withAdditionalImages(?array $additionalImages): Product
    {
        $clone = clone $this;
        $clone->additionalImages = $additionalImages;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getSalePriceEffectiveDate(): ?string
    {
        return $this->salePriceEffectiveDate;
    }

    /**
     * @param string|null $salePriceEffectiveDate
     * @return Product
     */
    public function withSalePriceEffectiveDate(?string $salePriceEffectiveDate): Product
    {
        $clone = clone $this;
        $clone->salePriceEffectiveDate = $salePriceEffectiveDate;
        return $clone;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Product
     */
    public function withQuantity(int $quantity): Product
    {
        $clone = clone $this;
        $clone->quantity = $quantity;
        return $clone;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function withPrice(float $price): Product
    {
        $clone = clone $this;
        $clone->price = $price;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getItemWeight(): ?float
    {
        return $this->itemWeight;
    }

    /**
     * @param float|null $itemWeight
     * @return Product
     */
    public function withItemWeight(?float $itemWeight): Product
    {
        $clone = clone $this;
        $clone->itemWeight = $itemWeight;
        return $clone;
    }

    /**
     * @return bool|null
     */
    public function getEligibleForFreeShipping(): ?bool
    {
        return $this->eligibleForFreeShipping;
    }

    /**
     * @param bool|null $eligibleForFreeShipping
     * @return Product
     */
    public function withEligibleForFreeShipping(?bool $eligibleForFreeShipping): Product
    {
        $clone = clone $this;
        $clone->eligibleForFreeShipping = $eligibleForFreeShipping;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getWarehouseDcCode(): ?string
    {
        return $this->warehouseDcCode;
    }

    /**
     * @param string|null $warehouseDcCode
     * @return Product
     */
    public function withWarehouseDcCode(?string $warehouseDcCode): Product
    {
        $clone = clone $this;
        $clone->warehouseDcCode = $warehouseDcCode;
        return $clone;
    }

    /**
     * @return bool|null
     */
    public function getIsExchangeable(): ?bool
    {
        return $this->isExchangeable;
    }

    /**
     * @param bool|null $isExchangeable
     * @return Product
     */
    public function withIsExchangeable(?bool $isExchangeable): Product
    {
        $clone = clone $this;
        $clone->isExchangeable = $isExchangeable;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getOrderLineItemNumber(): ?string
    {
        return $this->orderLineItemNumber;
    }

    /**
     * @param string|null $orderLineItemNumber
     * @return Product
     */
    public function withOrderLineItemNumber(?string $orderLineItemNumber): Product
    {
        $clone = clone $this;
        $clone->orderLineItemNumber = $orderLineItemNumber;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getVatRate(): ?float
    {
        return $this->vatRate;
    }

    /**
     * @param float|null $vatRate
     * @return Product
     */
    public function withVatRate(?float $vatRate): Product
    {
        $clone = clone $this;
        $clone->vatRate = $vatRate;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getVatValue(): ?float
    {
        return $this->vatValue;
    }

    /**
     * @param float|null $vatValue
     * @return Product
     */
    public function withVatValue(?float $vatValue): Product
    {
        $clone = clone $this;
        $clone->vatValue = $vatValue;
        return $clone;
    }

    /**
     * @return RetailerProductInfo|null
     */
    public function getRetailerProductInfo(): ?RetailerProductInfo
    {
        return $this->retailerProductInfo;
    }

    /**
     * @param RetailerProductInfo|null $retailerProductInfo
     * @return Product
     */
    public function withRetailerProductInfo(?RetailerProductInfo $retailerProductInfo): Product
    {
        $clone = clone $this;
        $clone->retailerProductInfo = $retailerProductInfo;
        return $clone;
    }

    /**
     * @return ProductInformationCollection
     */
    public function getProductInformation(): ProductInformationCollection
    {
        return $this->productInformation;
    }

    /**
     * @param ProductInformationCollection $productInformation
     * @return Product
     */
    public function withProductInformation(ProductInformationCollection $productInformation): Product
    {
        $clone = clone $this;
        $clone->productInformation = $productInformation;
        return $clone;
    }

    /**
     * @return PriceCollection|null
     */
    public function getPrices(): ?PriceCollection
    {
        return $this->prices;
    }

    /**
     * @param PriceCollection|null $prices
     * @return Product
     */
    public function withPrices(?PriceCollection $prices): Product
    {
        $clone = clone $this;
        $clone->prices = $prices;
        return $clone;
    }

    public static function fromJson(array $json): self
    {
        $result = new self;
        $result->sku = $json['sku'];
        $result->masterSku = $json['masterSku'] ?? null;
        $result->brand = $json['brand'] ?? null;
        $result->googleProductCategory = $json['googleProductCategory'] ?? null;
        $result->gtin = $json['gtin'];
        $result->mpn = $json['mpn'] ?? null;
        $result->hsCode = $json['hsCode'] ?? null;
        $result->importHSCode = $json['importHSCode'] ?? null;
        $result->gbEori = $json['gbEori'] ?? null;
        $result->euEori = $json['euEori'] ?? null;
        $result->xiEori = $json['xiEori'] ?? null;
        $result->customsProcedureCode = $json['customsProcedureCode'] ?? null;
        $result->returnsGoodsRelief = $json['returnsGoodsRelief'] ?? null;
        $result->condition = $json['condition'] ?? null;
        $result->availability = $json['availability'] ?? null;
        $result->additionalImages = $json['additionalImages'] ?? null;
        $result->salePriceEffectiveDate = $json['salePriceEffectiveDate'] ?? null;
        $result->quantity = $json['quantity'];
        $result->price = $json['price'];
        $result->itemWeight = $json['itemWeight'] ?? null;
        $result->eligibleForFreeShipping = $json['eligibleForFreeShipping'] ?? null;
        $result->warehouseDcCode = $json['warehouseDcCode'] ?? null;
        $result->isExchangeable = $json['isExchangeable'] ?? null;
        $result->orderLineItemNumber = $json['orderLineItemNumber'] ?? null;
        $result->vatRate = $json['vatRate'] ?? null;
        $result->vatValue = $json['vatValue'] ?? null;
        $result->retailerProductInfo = isset ($json['retailerProductInfo']) ?
            RetailerProductInfo::fromJson($json['retailerProductInfo']) :
            null;
        $result->productInformation = ProductInformationCollection::fromJson($json['productInformation']);
        $result->prices = isset ($json['prices']) ?
            PriceCollection::fromJson($json['prices']) :
            null;
        return $result;
    }

    public function toJson(): array
    {
        /**
         * Required
         */
        $this->json['sku'] = $this->getSku();
        $this->json['gtin'] = $this->getGtin();
        $this->json['quantity'] = $this->getQuantity();
        $this->json['price'] = $this->getPrice();
        $this->json['productInformation'] = $this->getProductInformation()->toJson();

        /**
         * Optional
         */
        if ($this->getMasterSku()) {
            $this->json['masterSku'] = $this->getMasterSku();
        }
        if ($this->getBrand()) {
            $this->json['brand'] = $this->getBrand();
        }
        if ($this->getGoogleProductCategory()) {
            $this->json['googleProductCategory'] = $this->getGoogleProductCategory();
        }
        if ($this->getMpn()) {
            $this->json['mpn'] = $this->getMpn();
        }
        if ($this->getHsCode()) {
            $this->json['hsCode'] = $this->getHsCode();
        }
        if ($this->getImportHSCode()) {
            $this->json['importHSCode'] = $this->getImportHSCode();
        }
        if ($this->getGbEori()) {
            $this->json['gbEori'] = $this->getGbEori();
        }
        if ($this->getEuEori()) {
            $this->json['euEori'] = $this->getEuEori();
        }
        if ($this->getXiEori()) {
            $this->json['xiEori'] = $this->getXiEori();
        }
        if ($this->getCustomsProcedureCode()) {
            $this->json['customsProcedureCode'] = $this->getCustomsProcedureCode();
        }
        if ($this->getReturnsGoodsRelief()) {
            $this->json['returnsGoodsRelief'] = $this->getReturnsGoodsRelief();
        }
        if ($this->getCondition()) {
            $this->json['condition'] = $this->getCondition();
        }
        if ($this->getAvailability()) {
            $this->json['availability'] = $this->getAvailability();
        }
        if ($this->getAdditionalImages()) {
            $this->json['additionalImages'] = $this->getAdditionalImages();
        }
        if ($this->getSalePriceEffectiveDate()) {
            $this->json['salePriceEffectiveDate'] = $this->getSalePriceEffectiveDate();
        }
        if ($this->getItemWeight()) {
            $this->json['itemWeight'] = $this->getItemWeight();
        }
        if ($this->getEligibleForFreeShipping()) {
            $this->json['eligibleForFreeShipping'] = $this->getEligibleForFreeShipping();
        }
        if ($this->getWarehouseDcCode()) {
            $this->json['warehouseDcCode'] = $this->getWarehouseDcCode();
        }
        if ($this->getIsExchangeable()) {
            $this->json['isExchangeable'] = $this->getIsExchangeable();
        }
        if ($this->getOrderLineItemNumber()) {
            $this->json['orderLineItemNumber'] = $this->getOrderLineItemNumber();
        }
        if ($this->getVatRate()) {
            $this->json['vatRate'] = $this->getVatRate();
        }
        if ($this->getVatValue()) {
            $this->json['vatValue'] = $this->getVatValue();
        }
        if ($this->getRetailerProductInfo()) {
            $this->json['retailerProductInfo'] = $this->getRetailerProductInfo()->toJson();
        }
        if ($this->getPrices()) {
            $this->json['prices'] = $this->getPrices()->toJson();
        }

        return $this->json;
    }
}
