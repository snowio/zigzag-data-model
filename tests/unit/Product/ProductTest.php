<?php
namespace SnowIO\ZigZagDataModel\Tests\Unit\Product;

use PHPUnit\Framework\TestCase;
use SnowIO\ZigZagDataModel\Product\Price;
use SnowIO\ZigZagDataModel\Product\PriceCollection;
use SnowIO\ZigZagDataModel\Product\Product;
use SnowIO\ZigZagDataModel\Product\ProductInformation;
use SnowIO\ZigZagDataModel\Product\ProductInformationCollection;

class ProductTest extends TestCase
{
    public function testEquals(): void
    {
        $product = Product::of('120349', ProductInformationCollection::of([
            ProductInformation::of('Test', 'GB')
        ]))->withPrices(PriceCollection::of([
            Price::of('GB')->withCostPrice('300')
        ]));

        $sameProduct = clone $product;
        self::assertTrue($sameProduct->equals($product));
        $updatedProduct = $sameProduct->withPrices(PriceCollection::of([
            Price::of('DE')->withCostPrice('4300')
        ]));

        self::assertFalse($updatedProduct->equals($product));
    }
}