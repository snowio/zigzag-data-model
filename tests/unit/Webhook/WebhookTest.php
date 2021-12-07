<?php


namespace SnowIO\ZigZagDataModel\Tests\Unit\Webhook;


use PHPUnit\Framework\TestCase;
use SnowIO\ZigZagDataModel\Webhook\Event\Notification;
use SnowIO\ZigZagDataModel\Webhook\ProductCollection;

class WebhookTest extends TestCase
{
    public function testNotificationModel(): void
    {
        $json = json_decode(file_get_contents(__DIR__ . '/notification.json'), true);
        $webhook = Notification::fromJson($json);

        self::assertEquals($json, $webhook->toJson());
    }

    public function testDataModel(): void
    {
        $json = json_decode(file_get_contents(__DIR__ . '/notification.json'), true);
        $webhook = Notification::fromJson($json);

        self::assertEquals($json['data'], $webhook->getData()->toJson());
    }

    public function testProductCollectionEquality(): void
    {
        $json = json_decode(file_get_contents(__DIR__ . '/notification.json'), true);
        $webhook = Notification::fromJson($json);
        $products = ProductCollection::fromJson($json['data']['products']);

        self::assertTrue($products->equals($webhook->getData()->getProducts()));
    }
}