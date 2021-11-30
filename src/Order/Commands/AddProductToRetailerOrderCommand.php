<?php
namespace SnowIO\ZigZagDataModel\Order\Commands;

use SnowIO\ZigZagDataModel\Order\ProductCollection;

class AddProductToRetailerOrderCommand
{
    public static function of(string $retailerCode, string $orderNumber, ProductCollection $products): self
    {
        return new self($retailerCode, $orderNumber, $products);
    }

    public function toJson(): array
    {
        return [
            "uri" => "/RetailerOrders/{$this->retailerCode}/{$this->orderNumber}/Product",
            "body" => [ "products" => $this->products->toJson() ]
        ];
    }

    private $retailerCode;
    private $orderNumber;
    /** @var ProductCollection */
    private $products;

    private function __construct(string $retailerCode, string $orderNumber, ProductCollection $products)
    {
        $this->retailerCode = $retailerCode;
        $this->orderNumber = $orderNumber;
        $this->products = $products;
    }
}
