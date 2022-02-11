<?php
namespace SnowIO\ZigZagDataModel\Order\Commands;

use SnowIO\ZigZagDataModel\Order\OrderData;

class CreateOrderCommand
{
    private $order;
    private $orderNumber;
    private $urlPrefix;

    public static function of(string $orderNumber, OrderData $order, $urlPrefix = "/RetailerOrders/%s"): self
    {
        return new self($orderNumber, $order, $urlPrefix);
    }

    public function toJson(): array
    {
        return [
          "uri" => sprintf($this->urlPrefix, $this->orderNumber),
          "body" => $this->order->toJson()
        ];
    }

    private function __construct(string $orderNumber, OrderData $order, $urlPrefix)
    {
        $this->orderNumber = $orderNumber;
        $this->order = $order;
        $this->urlPrefix = $urlPrefix;
    }
}
