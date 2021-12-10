<?php

namespace SnowIO\ZigZagDataModel\Product;

use SnowIO\ZigZagDataModel\Internal\SetTrait;

class PriceCollection
{
    use SetTrait;

    private static function getKey(Price $price): ?string
    {
        return md5(json_encode($price->toJson()));
    }

    public function toJson(): array
    {
        return array_values(array_map(static function (Price $item) {
            return $item->toJson();
        }, $this->items));
    }

    public function getIterator(): \Generator
    {
        foreach ($this->items as $item) {
            yield $item;
        }
    }

    private static function itemsAreEqual(Price $item1, Price $item2): bool
    {
        return $item1->equals($item2);
    }
}
