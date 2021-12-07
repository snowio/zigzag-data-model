<?php
namespace SnowIO\ZigZagDataModel\Webhook;

use Iterator;
use SnowIO\ZigZagDataModel\Internal\SetTrait;

class ProductCollection
{
    use SetTrait;

    private static function getKey(Product $product): string
    {
        return $product->getProductSku();
    }
    public function toJson(): array
    {
        return  array_map(static function (Product $product) {
            return $product->toJson();
        }, $this->items);
    }

    public static function fromJson(array $json): self
    {
        $result = self::create();
        foreach ($json as $item) {
            $result->items[] = Product::fromJson($item);
        }
        return $result;
    }

    public static function fromIterator(Iterator $iterator): self
    {
        $result = self::create();
        foreach ($iterator as $item) {
            $result->items[] = $item;
        }
        return $result;
    }

    public function getIterator(): Iterator
    {
        foreach ($this->items as $item) {
            yield $item;
        }
    }

    private static function itemsAreEqual(Product $item1, Product $item2): bool
    {
        return $item1->equals($item2);
    }
}
