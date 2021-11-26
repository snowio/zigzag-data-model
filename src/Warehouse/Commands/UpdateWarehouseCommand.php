<?php
namespace SnowIO\ZigZagDataModel\Warehouse\Commands;

use SnowIO\ZigZagDataModel\Warehouse\Warehouse;

class UpdateWarehouseCommand
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
        $dcCode = $this->warehouse->getDcCode();
        return [
            "uri" => "/Retailers/Warehouses/{$dcCode}/Update",
            "body" => $this->warehouse->toJson()
        ];
    }

    private function __construct()
    {
    }
}
