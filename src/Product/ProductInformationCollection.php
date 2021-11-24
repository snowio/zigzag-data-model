<?php


namespace SnowIO\ZigZagDataModel\Product;


class ProductInformationCollection implements \IteratorAggregate
{
    private $items = [];

    public static function create(): self
    {
        return new self;
    }

    /**
     * @param ProductInformation[] $items
     * @return $this
     */
    public static function of(array $items): self
    {
        $result = new self;
        $result->items = $items;
        return $result;
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
}