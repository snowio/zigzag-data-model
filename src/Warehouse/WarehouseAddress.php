<?php

namespace SnowIO\ZigZagDataModel\Warehouse;

class WarehouseAddress
{
    private $json = [];

    public static function create(): self
    {
        return new self;
    }

    public function withDistrict(string $district): self
    {
        $result = clone $this;
        $result->json['district'] = $district;
        return $result;
    }

    public function withState(string $state): self
    {
        $result = clone $this;
        $result->json['state'] = $state;
        return $result;
    }

    public function withStreetAddress1(string $streetAddress1): self
    {
        $result = clone $this;
        $result->json['streetAddress1'] = $streetAddress1;
        return $result;
    }

    public function withStreetAddress2(string $streetAddress2): self
    {
        $result = clone $this;
        $result->json['streetAddress2'] = $streetAddress2;
        return $result;
    }

    public function withStreetAddress3(string $streetAddress3): self
    {
        $result = clone $this;
        $result->json['streetAddress3'] = $streetAddress3;
        return $result;
    }

    public function withBuildingNumber(string $buildingNumber): self
    {
        $result = clone $this;
        $result->json['buildingNumber'] = $buildingNumber;
        return $result;
    }

    public function withZipCode(string $zipCode): self
    {
        $result = clone $this;
        $result->json['zipCode'] = $zipCode;
        return $result;
    }

    public function withPhone(string $phone): self
    {
        $result = clone $this;
        $result->json['phone'] = $phone;
        return $result;
    }

    public function withCity(string $city): self
    {
        $result = clone $this;
        $result->json['city'] = $city;
        return $result;
    }

    public function withNeighborhood(string $neighborhood): self
    {
        $result = clone $this;
        $result->json['neighborhood'] = $neighborhood;
        return $result;
    }

    public function withCountryIso2Code(string $countryIso2Code): self
    {
        $result = clone $this;
        $result->json['countryIso2Code'] = $countryIso2Code;
        return $result;
    }

    public function getDistrict(): string
    {
        return $this->json['district'];
    }

    public function getState(): string
    {
        return $this->json['state'];
    }

    public function getStreetAddress1(): string
    {
        return $this->json['streetAddress1'];
    }

    public function getStreetAddress2(): string
    {
        return $this->json['streetAddress2'];
    }

    public function getStreetAddress3(): string
    {
        return $this->json['streetAddress3'];
    }

    public function getBuildingNumber(): string
    {
        return $this->json['buildingNumber'];
    }

    public function getZipCode(): string
    {
        return $this->json['zipCode'];
    }

    public function getPhone(): string
    {
        return $this->json['phone'];
    }

    public function getCity(): string
    {
        return $this->json['city'];
    }

    public function getNeighborhood(): string
    {
        return $this->json['neighborhood'];
    }

    public function getCountryIso2Code(): string
    {
        return $this->json['countryIso2Code'];
    }

    public function toJson(): array
    {
        return $this->json;
    }

    private function __construct()
    {
    }
}
