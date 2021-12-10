<?php
namespace SnowIO\ZigZagDataModel\Webhook;

class Data
{
    private $json;
    private $products;

    public static function fromJson(array $json): self
    {
        $result = new self();
        $result->json = $json;
        $result->products = ProductCollection::fromJson($json['products']);
        return $result;
    }

    public function withRetailerCode(string $retailerCode): self
    {
        $result = clone $this;
        $result->json['retailerCode'] = $retailerCode;
        return $result;
    }

    public function withOrderNumber(string $orderNumber): self
    {
        $result = clone $this;
        $result->json['orderNumber'] = $orderNumber;
        return $result;
    }

    public function withReturnId(string $returnId): self
    {
        $result = clone $this;
        $result->json['returnId'] = $returnId;
        return $result;
    }

    public function withSource(string $source): self
    {
        $result = clone $this;
        $result->json['source'] = $source;
        return $result;
    }

    public function withExternalReference(string $externalReference): self
    {
        $result = clone $this;
        $result->json['externalReference'] = $externalReference;
        return $result;
    }

    public function withCountry(string $country): self
    {
        $result = clone $this;
        $result->json['country'] = $country;
        return $result;
    }

    public function withCustomerName(string $customerName): self
    {
        $result = clone $this;
        $result->json['customerName'] = $customerName;
        return $result;
    }

    public function withSalutation(string $salutation): self
    {
        $result = clone $this;
        $result->json['salutation'] = $salutation;
        return $result;
    }

    public function withCustomerType(int $customerType): self
    {
        $result = clone $this;
        $result->json['customerType'] = $customerType;
        return $result;
    }

    public function withCarrier(string $carrier): self
    {
        $result = clone $this;
        $result->json['carrier'] = $carrier;
        return $result;
    }

    public function withCarrierService(string $carrierService): self
    {
        $result = clone $this;
        $result->json['carrierService'] = $carrierService;
        return $result;
    }

    public function withShippingCost(string $shippingCost): self
    {
        $result = clone $this;
        $result->json['shippingCost'] = $shippingCost;
        return $result;
    }

    public function withReturnCost(string $returnCost): self
    {
        $result = clone $this;
        $result->json['returnCost'] = $returnCost;
        return $result;
    }

    public function withReturnCostCurrency(string $returnCostCurrency): self
    {
        $result = clone $this;
        $result->json['returnCostCurrency'] = $returnCostCurrency;
        return $result;
    }

    public function withVoucherValue(string $voucherValue): self
    {
        $result = clone $this;
        $result->json['voucherValue'] = $voucherValue;
        return $result;
    }

    public function withWarehouse(string $warehouse): self
    {
        $result = clone $this;
        $result->json['warehouse'] = $warehouse;
        return $result;
    }

    public function withWarehouseReference(string $warehouseReference): self
    {
        $result = clone $this;
        $result->json['warehouseReference'] = $warehouseReference;
        return $result;
    }

    public function withTrackingId(string $trackingId): self
    {
        $result = clone $this;
        $result->json['trackingId'] = $trackingId;
        return $result;
    }

    public function withDateTimeStatusChange(string $dateTimeStatusChange): self
    {
        $result = clone $this;
        $result->json['dateTimeStatusChange'] = $dateTimeStatusChange;
        return $result;
    }

    public function withLastTrackingStatus(string $lastTrackingStatus): self
    {
        $result = clone $this;
        $result->json['lastTrackingStatus'] = $lastTrackingStatus;
        return $result;
    }

    public function withOrderStatus(string $orderStatus): self
    {
        $result = clone $this;
        $result->json['orderStatus'] = $orderStatus;
        return $result;
    }

    public function withReturnOption(string $returnOption): self
    {
        $result = clone $this;
        $result->json['returnOption'] = $returnOption;
        return $result;
    }

    public function withProducts(ProductCollection $products): self
    {
        $result = clone $this;
        $result->products = $products;
        return $result;
    }

    public function getRetailerCode(): string
    {
        return $this->json['retailerCode'];
    }

    public function getOrderNumber(): string
    {
        return $this->json['orderNumber'];
    }

    public function getReturnId(): string
    {
        return $this->json['returnId'];
    }

    public function getSource(): string
    {
        return $this->json['source'];
    }

    public function getExternalReference(): string
    {
        return $this->json['externalReference'];
    }

    public function getCountry(): string
    {
        return $this->json['country'];
    }

    public function getCustomerName(): string
    {
        return $this->json['customerName'];
    }

    public function getSalutation(): string
    {
        return $this->json['salutation'];
    }

    public function getCustomerType(): int
    {
        return $this->json['customerType'];
    }

    public function getCarrier(): string
    {
        return $this->json['carrier'];
    }

    public function getCarrierService(): string
    {
        return $this->json['carrierService'];
    }

    public function getShippingCost(): string
    {
        return $this->json['shippingCost'];
    }

    public function getReturnCost(): string
    {
        return $this->json['returnCost'];
    }

    public function getReturnCostCurrency(): string
    {
        return $this->json['returnCostCurrency'];
    }

    public function getVoucherValue(): string
    {
        return $this->json['voucherValue'];
    }

    public function getWarehouse(): string
    {
        return $this->json['warehouse'];
    }

    public function getWarehouseReference(): string
    {
        return $this->json['warehouseReference'];
    }

    public function getTrackingId(): string
    {
        return $this->json['trackingId'];
    }

    public function getDateTimeStatusChange(): string
    {
        return $this->json['dateTimeStatusChange'];
    }

    public function getLastTrackingStatus(): string
    {
        return $this->json['lastTrackingStatus'];
    }

    public function getOrderStatus(): string
    {
        return $this->json['orderStatus'];
    }

    public function getReturnOption(): string
    {
        return $this->json['returnOption'];
    }

    public function getProducts(): ProductCollection
    {
        return $this->products;
    }

    public function toJson(): array
    {
        $json = $this->json;
        $json['products'] = $this->products->toJson();
        return $json;
    }

    private function __construct()
    {
        $this->products = ProductCollection::create();
    }
}
