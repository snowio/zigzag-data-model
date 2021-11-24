<?php
namespace SnowIO\ZigZagDataModel\Product;

class Product
{
    private $json = [];

    public static function of(string $gtin, ProductInformationCollection $productInformation): self
    {
        $result = new self;
        $result->json['gtin'] = $gtin;
        $result->json['productInformation'] = $productInformation;
        return $result;
    }

    public function getRetailerCode(): self
    {
        return $this->json['retailerCode'];
    }

    public function getMasterSku(): self
    {
        return $this->json['masterSku'];
    }

    public function getBrand(): self
    {
        return $this->json['brand'];
    }

    public function getGoogleProductCategory(): self
    {
        return $this->json['googleProductCategory'];
    }

    public function getGtin(): self
    {
        return $this->json['gtin'];
    }

    public function getMpn(): self
    {
        return $this->json['mpn'];
    }

    public function getCondition(): self
    {
        return $this->json['condition'];
    }

    public function getAvailability(): self
    {
        return $this->json['availability'];
    }

    public function getSalePriceEffectiveDate(): self
    {
        return $this->json['salePriceEffectiveDate'];
    }

    public function getNumberOfPieces(): self
    {
        return $this->json['numberOfPieces'];
    }

    public function getProductInformation(): self
    {
        return $this->json['productInformation'];
    }

    public function getPrices(): self
    {
        return $this->json['prices'];
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
        $result->json['productInformation'] = $productInformation;
        return $result;
    }

    public function withPrices(PriceCollection $prices): self
    {
        $result = clone $this;
        $result->json['prices'] = $prices;
        return $result;
    }

    public function toJson(): array
    {
        $json = $this->json;

        $json['productInformation'] = $json['productInformation']->toJson();
        $json['prices'] = $json['prices']->toJson();
        return $json;
    }

    private function __construct()
    {
        $this->json['prices'] = PriceCollection::create();
        $this->json['productInformation'] = ProductInformationCollection::create();
    }
}
