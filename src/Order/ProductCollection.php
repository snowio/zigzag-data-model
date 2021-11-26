<?php

namespace SnowIO\ZigZagDataModel\Order;

use Iterator;

class ProductCollection implements \IteratorAggregate
{
    /** @var Product[] $items */
    private $items = [];

    private function __construct(array $products = [])
    {
        $this->items = $products;
    }

    public static function create(): self
    {
        return new self([]);
    }

    public static function of(array $items): self
    {
        return new self($items);
    }

    public function map(callable $callable): array
    {
        return array_map($callable, $this->items);
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
            $result->items[] = Product::fromJson($item);
        }
        return $result;
    }

    public function getIterator(): Iterator
    {
        foreach ($this->items as $item) {
            yield $item;
        }
    }
}
