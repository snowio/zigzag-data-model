<?php
namespace SnowIO\ZigZagDataModel\Warehouse;

class ContactCollection implements \IteratorAggregate
{
    private $items;

    public static function fromJson(array $json): self
    {
        return new self(array_map([Contact::class, 'fromJson'], $json));
    }

    /**
     * @param ContactCollection[] $contacts
     * @return static
     */
    public static function of(array $contacts): self
    {
        return new self($contacts);
    }

    public function toJson(): array
    {
        return array_map(static function (Contact $item) {
            return $item->toJson();
        }, $this->items);
    }

    public function getIterator(): \Generator
    {
        foreach ($this->items as $item) {
            yield $item;
        }
    }

    private function __construct(array $items)
    {
        $this->items = $items;
    }
}
