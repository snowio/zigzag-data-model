<?php
namespace SnowIO\ZigZagDataModel\Tests\Unit\Order;

use PHPUnit\Framework\TestCase;
use SnowIO\ZigZagDataModel\Order\Contact;
use SnowIO\ZigZagDataModel\Order\Contact\Address;
use SnowIO\ZigZagDataModel\Order\OrderData;
use SnowIO\ZigZagDataModel\Order\Product;
use SnowIO\ZigZagDataModel\Order\ProductCollection;

class OrderTest extends TestCase
{
    public function testEquals(): void
    {
        $order = $this->getOrderData();
        self::assertTrue($order->equals(clone $order));
        $updatedOrder  = $order->withRetailerCode('foobar123');
        self::assertFalse($updatedOrder->equals($order));

        $updatedOrder = $order->withProducts(
            ProductCollection::of(array_merge(iterator_to_array($order->getProducts()), [
                    Product::create()
                        ->withSku("I3842893")
                        ->withGtin("I3842893")
                        ->withPrice(100)
                        ->withQuantity(1)
                        ->withBrand("Ford")
                        ->withCondition('old'),
            ]))
        );
        self::assertFalse($updatedOrder->equals($order));
    }

    private function getOrderData(): OrderData
    {
        return OrderData::create()
            ->withProducts(ProductCollection::of([
                Product::create()
                    ->withSku("I3842897")
                    ->withGtin("I3842897")
                    ->withPrice(100)
                    ->withQuantity(1)
                    ->withBrand("Toyota")
                    ->withCondition('new'),
                Product::create()
                    ->withSku("I3842898")
                    ->withGtin("I3842898")
                    ->withPrice(200)
                    ->withQuantity(1)
                    ->withBrand("Nissan")
                    ->withCondition('old')
            ]))
            ->withBillingContact(
                $contact = Contact::create()
                    ->withFirstName("Alexander")
                    ->withLastName("Smith")
                    ->withEmail("as@test.com")
                    ->withAddress(
                        Address::create()
                            ->withStreetAddress1("123 Slomo Drive")
                            ->withCity("Manchester")
                            ->withCountryIso2Code("GB")
                    )
            )
            ->withShippingContact($contact);
    }
}