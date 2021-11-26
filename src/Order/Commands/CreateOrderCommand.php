<?php
namespace SnowIO\ZigZagDataModel\Order\Commands;

use SnowIO\ZigZagDataModel\Order\OrderData;

class CreateOrderCommand
{
    private $order;
    private $orderNumber;

    public static function of(string $orderNumber, OrderData $order): self
    {
        return new self($orderNumber, $order);
    }

    public function toJson(): array
    {
        return [
            "uri" => "/RetailerOrders/{$this->orderNumber}",
            "body" => $this->order->toJson()
        ];
    }

    private function __construct(string $orderNumber, OrderData $order)
    {
        $this->orderNumber = $orderNumber;
        $this->order = $order;
    }
}