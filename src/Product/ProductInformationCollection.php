<?php
namespace SnowIO\ZigZagDataModel\Product;

use SnowIO\ZigZagDataModel\Internal\SetTrait;

class ProductInformationCollection implements \IteratorAggregate
{
    use SetTrait;

    private static function getKey(ProductInformation $productInformation): ?string
    {
        return md5(json_encode($productInformation->toJson()));
    }

    public function toJson(): array
    {
        return array_map(static function (ProductInformation $item) {
            return $item->toJson();
        }, $this->items);
    }

    public function getIterator(): \Generator
    {
        foreach ($this->items as $item) {
            yield $item;
        }
    }

    private static function itemsAreEqual(ProductInformation $item1, ProductInformation $item2): bool
    {
        return $item1->equals($item2);
    }
}