<?php

namespace SnowIO\ZigZagDataModel\Product;

class PriceCollection
{
    private $items = [];

    public static function create(): self
    {
        return new self;
    }

    /**
     * @param Price[] $items
     * @return $this
     */
    public function of(array $items): self
    {
        $result = new $items;
        $result->items = $items;
        return $result;
    }

    public function toJson(): array
    {
        return array_map(static function (Price $item) {
            return $item->toJson();
        }, $this->items);
    }

    public function getIterator(): \Generator
    {
        foreach ($this->items as $item) {
            yield $item;
        }
    }
}