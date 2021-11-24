<?php

namespace SnowIO\ZigZagDataModel\Order\Product;

class PriceCollection implements \IteratorAggregate
{
    private $items;

    public static function create(): self
    {
        return new self();
    }

    public static function of(array $items): self
    {
        return new self($items);
    }

    public function toJson(): array
    {
        return  array_map(static function (Price $price) {
            return $price->toJson();
        }, $this->items);
    }

    public static function fromJson(array $json): self
    {
        $result = self::create();
        foreach ($json as $item) {
            $result->items[] = Price::fromJson($item);
        }
        return $result;
    }

    public function getIterator(): \Iterator
    {
        foreach ($this->items as $item) {
            yield $item;
        }
    }

    private function __construct(array $items = [])
    {
        $this->items = $items;
    }
}
