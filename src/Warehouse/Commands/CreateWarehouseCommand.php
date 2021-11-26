<?php
namespace SnowIO\ZigZagDataModel\Warehouse;

class CreateWarehouseCommand
{
    /** @var Warehouse */
    private $warehouse;

    public static function of(Warehouse $warehouse): self
    {
        $result = new self;
        $result->warehouse = $warehouse;
        return $result;
    }

    public function toJson(): array
    {
        return [
            "body" => $this->warehouse->toJson()
        ];
    }

    private function __construct()
    {
    }
}
