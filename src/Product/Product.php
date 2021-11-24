<?php
namespace SnowIO\ZigZagDataModel\Product;

class Product
{
    private $json = [];
    private $productInformation;
    private $prices;

    public static function of(string $gtin, ProductInformationCollection $productInformation): self
    {
        $result = new self;
        $result->json['gtin'] = $gtin;
        $result->productInformation = $productInformation;
        $result->prices = PriceCollection::create();
        return $result;
    }

    public function getRetailerCode()
    {
        return $this->json['retailerCode'];
    }

    public function getMasterSku()
    {
        return $this->json['masterSku'];
    }

    public function getBrand()
    {
        return $this->json['brand'];
    }

    public function getGoogleProductCategory()
    {
        return $this->json['googleProductCategory'];
    }

    public function getGtin()
    {
        return $this->json['gtin'];
    }

    public function getMpn()
    {
        return $this->json['mpn'];
    }

    public function getCondition()
    {
        return $this->json['condition'];
    }

    public function getAvailability()
    {
        return $this->json['availability'];
    }

    public function getSalePriceEffectiveDate()
    {
        return $this->json['salePriceEffectiveDate'];
    }

    public function getNumberOfPieces()
    {
        return $this->json['numberOfPieces'];
    }

    public function getProductInformation(): ProductInformationCollection
    {
        return $this->productInformation;
    }

    public function getPrices(): PriceCollection
    {
        return $this->prices;
    }
    
    public function withRetailerCode(string $retailerCode): self
    {
        $result = clone $this;
        $result->json['retailerCode'] = $retailerCode;
        return $result;
    }

    public function withMasterSku(string $masterSku): self
    {
        $result = clone $this;
        $result->json['masterSku'] = $masterSku;
        return $result;
    }

    public function withBrand(string $brand): self
    {
        $result = clone $this;
        $result->json['brand'] = $brand;
        return $result;
    }

    public function withGoogleProductCategory(string $googleProductCategory): self
    {
        $result = clone $this;
        $result->json['googleProductCategory'] = $googleProductCategory;
        return $result;
    }
    
    public function withGtin(string $gtin): self
    {
        $result = clone $this;
        $result->json['gtin'] = $gtin;
        return $result;
    }
    
    public function withMpn(string $mpn): self
    {
        $result = clone $this;
        $result->json['mpn'] = $mpn;
        return $result;
    }
    
    public function withCondition(string $condition): self
    {
        $result = clone $this;
        $result->json['condition'] = $condition;
        return $result;
    }
    
    public function withAvailability(string $availability): self
    {
        $result = clone $this;
        $result->json['availability'] = $availability;
        return $result;
    }

    public function withSalePriceEffectiveDate(string $salePriceEffectiveDate): self
    {
        $result = clone $this;
        $result->json['salePriceEffectiveDate'] = $salePriceEffectiveDate;
        return $result;
    }
    
    public function withNumberOfPieces(string $numberOfPieces): self
    {
        $result = clone $this;
        $result->json['numberOfPieces'] = $numberOfPieces;
        return $result;
    }
    
    public function withProductInformation(ProductInformationCollection $productInformation): self
    {
        $result = clone $this;
        $result->productInformation = $productInformation;
        return $result;
    }

    public function withPrices(PriceCollection $prices): self
    {
        $result = clone $this;
        $result->prices = $prices;
        return $result;
    }

    public function toJson(): array
    {
        $json = $this->json;

        $json['productInformation'] = $this->productInformation->toJson();
        $json['prices'] = $this->prices->toJson();
        return $json;
    }

    public function equals($other): bool
    {
        return $other instanceof self &&
            $other->productInformation->equals($this->productInformation) &&
            $other->prices->equals($this->prices) &&
            $other->json === $this->json;
    }

    private function __construct()
    {
        $this->prices = PriceCollection::create();
        $this->productInformation = ProductInformationCollection::create();
    }
}
