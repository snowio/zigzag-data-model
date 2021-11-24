<?php

namespace SnowIO\ZigZagDataModel\Warehouse;

class Warehouse
{
    private $json = [];

    public static function of(
        string $dcCode,
        string $timeZone = "Dateline Standard Time",
        string $operatingCurrency = "GBP",
        int $operatingLanguage = 2
    ): self {
        $result = new self;
        $result->json['dcCode'] = $dcCode;
        $result->json['timeZone'] = $timeZone;
        $result->json['operatingCurrency'] = $operatingCurrency;
        $result->json['operatingLanguage'] = $operatingLanguage;
        return $result;
    }

    public function withRetailerCode(string $retailerCode): self
    {
        $result = clone $this;
        $result->json['retailerCode'] = $retailerCode;
        return $result;
    }

    public function withDcCode(string $dcCode): self
    {
        $result = clone $this;
        $result->json['dcCode'] = $dcCode;
        return $result;
    }

    public function withMawbCode(string $mawbCode): self
    {
        $result = clone $this;
        $result->json['mawbCode'] = $mawbCode;
        return $result;
    }

    public function withDestinationId(string $destinationId): self
    {
        $result = clone $this;
        $result->json['destinationId'] = $destinationId;
        return $result;
    }

    public function withReference(string $reference): self
    {
        $result = clone $this;
        $result->json['reference'] = $reference;
        return $result;
    }

    public function withLaunchDate(string $launchDate): self
    {
        $result = clone $this;
        $result->json['launchDate'] = $launchDate;
        return $result;
    }

    public function withOpeningHours(string $openingHours): self
    {
        $result = clone $this;
        $result->json['openingHours'] = $openingHours;
        return $result;
    }

    public function withClosingHours(string $closingHours): self
    {
        $result = clone $this;
        $result->json['closingHours'] = $closingHours;
        return $result;
    }

    public function withTimeZone(string $timeZone): self
    {
        $result = clone $this;
        $result->json['timeZone'] = $timeZone;
        return $result;
    }

    public function withOperatingLanguage(int $operatingLanguage): self
    {
        $result = clone $this;
        $result->json['operatingLanguage'] = $operatingLanguage;
        return $result;
    }

    public function withOperatingCurrency(string $operatingCurrency): self
    {
        $result = clone $this;
        $result->json['operatingCurrency'] = $operatingCurrency;
        return $result;
    }

    public function withWorkingDaysSlaFrom(string $workingDaysSlaFrom): self
    {
        $result = clone $this;
        $result->json['workingDaysSlaFrom'] = $workingDaysSlaFrom;
        return $result;
    }

    public function withWorkingDaysSlaTo(string $workingDaysSlaTo): self
    {
        $result = clone $this;
        $result->json['workingDaysSlaTo'] = $workingDaysSlaTo;
        return $result;
    }

    public function withStatus(int $status): self
    {
        $result = clone $this;
        $result->json['status'] = $status;
        return $result;
    }

    public function withDaysToDeactivate(int $daysToDeactivate): self
    {
        $result = clone $this;
        $result->json['daysToDeactivate'] = $daysToDeactivate;
        return $result;
    }

    public function withContacts(ContactCollection $contacts): self
    {
        $result = clone $this;
        $result->json['contacts'] = $contacts;
        return $result;
    }

    public function withWarehouseAddress(WarehouseAddress $warehouseAddress): self
    {
        $result = clone $this;
        $result->json['warehouseAddress'] = $warehouseAddress;
        return $result;
    }

    public function getRetailerCode(): string
    {
        return $this->json['retailerCode'];
    }

    public function getDcCode(): ?string
    {
        return $this->json['dcCode'] ?? null;
    }

    public function getMawbCode(): ?string
    {
        return $this->json['mawbCode'] ?? null;
    }

    public function getDestinationId(): ?string
    {
        return $this->json['destinationId'] ?? null;
    }

    public function getReference(): ?string
    {
        return $this->json['reference'] ?? null;
    }

    public function getLaunchDate(): string
    {
        return $this->json['launchDate'];
    }

    public function getOpeningHours(): ?string
    {
        return $this->json['openingHours'] ?? null;
    }

    public function getClosingHours(): ?string
    {
        return $this->json['closingHours'] ?? null;
    }

    public function getTimeZone(): ?string
    {
        return $this->json['timeZone'] ?? null;
    }

    public function getOperatingLanguage(): ?int
    {
        return $this->json['operatingLanguage'] ?? null;
    }

    public function getOperatingCurrency(): ?string
    {
        return $this->json['operatingCurrency'] ?? null;
    }

    public function getWorkingDaysSlaFrom(): ?string
    {
        return $this->json['workingDaysSlaFrom'] ?? null;
    }

    public function getWorkingDaysSlaTo(): ?string
    {
        return $this->json['workingDaysSlaTo'] ?? null;
    }

    public function getStatus(): ?int
    {
        return $this->json['status'] ?? null;
    }

    public function getDaysToDeactivate(): ?int
    {
        return $this->json['daysToDeactivate'] ?? null;
    }

    public function getWarehouseAddress(): WarehouseAddress
    {
        return $this->json['warehouseAddress'];
    }

    public function getContacts(): ContactCollection
    {
        return $this->json['contacts'];
    }

    public function toJson(): array
    {
        $json = $this->json;
        if ($json['warehouseAddress']) {
            $json['warehouseAddress'] = $json['warehouseAddress']->toJson();
        }

        $json['contacts'] = $json['contacts']->toJson();
        return $json;
    }

    private function __construct()
    {
        $this->json['contacts'] = ContactCollection::of([]);
    }
}
