<?php

namespace SnowIO\ZigZagDataModel\Product\Commands;

use SnowIO\ZigZagDataModel\Product\Product;

class ImportProductCommand
{
    private $productSku;
    /** @var Product */
    private $product;

    public static function of(string $productSku, Product $product): self
    {
        $result = new self;
        $result->productSku = $productSku;
        $result->product = $product;

        return $result;
    }

    public function toJson(): array
    {
        return [
            "uri" => "/products/{$this->productSku}",
            "body" => $this->product->toJson()
        ];
    }

    private function __construct()
    {
    }
}
