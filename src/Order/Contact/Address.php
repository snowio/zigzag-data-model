<?php

namespace SnowIO\ZigZagDataModel\Order\Contact;

class Address
{
    /** @var array $json */
    private $json;
    /** @var string $streetAddress1 */
    private $streetAddress1;
    /** @var string $phone */
    private $phone;
    /** @var string $city */
    private $city;
    /** @var string $countryIso2Code */
    private $countryIso2Code;
    /** @var string|null $zipCode */
    private $zipCode = null;
    /** @var string|null $state */
    private $state = null;
    /** @var string|null $streetAddress2 */
    private $streetAddress2 = null;
    /** @var string|null $streetAddress3 */
    private $streetAddress3 = null;
    /** @var string|null $buildingNumber */
    private $buildingNumber = null;
    /** @var string|null $neighborhood */
    private $neighborhood = null;

    public static function create(): self
    {
        return new self;
    }

    /**
     * @return string
     */
    public function getStreetAddress1(): string
    {
        return $this->streetAddress1;
    }

    /**
     * @param string $streetAddress1
     * @return Address
     */
    public function withStreetAddress1(?string $streetAddress1): Address
    {
        $clone = clone $this;
        $clone->streetAddress1 = $streetAddress1;
        return $clone;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Address
     */
    public function withPhone(?string $phone): Address
    {
        $clone = clone $this;
        $clone->phone = $phone;
        return $clone;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function withCity(?string $city): Address
    {
        $clone = clone $this;
        $clone->city = $city;
        return $clone;
    }

    /**
     * @return string
     */
    public function getCountryIso2Code(): string
    {
        return $this->countryIso2Code;
    }

    /**
     * @param string $countryIso2Code
     * @return Address
     */
    public function withCountryIso2Code(?string $countryIso2Code): Address
    {
        $clone = clone $this;
        $clone->countryIso2Code = $countryIso2Code;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     * @return Address
     */
    public function withZipCode(?string $zipCode): Address
    {
        $clone = clone $this;
        $clone->zipCode = $zipCode;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     * @return Address
     */
    public function withState(?string $state): Address
    {
        $clone = clone $this;
        $clone->state = $state;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getStreetAddress2(): ?string
    {
        return $this->streetAddress2;
    }

    /**
     * @param string|null $streetAddress2
     * @return Address
     */
    public function withStreetAddress2(?string $streetAddress2): Address
    {
        $clone = clone $this;
        $clone->streetAddress2 = $streetAddress2;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getStreetAddress3(): ?string
    {
        return $this->streetAddress3;
    }

    /**
     * @param string|null $streetAddress3
     * @return Address
     */
    public function withStreetAddress3(?string $streetAddress3): Address
    {
        $clone = clone $this;
        $clone->streetAddress3 = $streetAddress3;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getBuildingNumber(): ?string
    {
        return $this->buildingNumber;
    }

    /**
     * @param string|null $buildingNumber
     * @return Address
     */
    public function withBuildingNumber(?string $buildingNumber): Address
    {
        $clone = clone $this;
        $clone->buildingNumber = $buildingNumber;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @param string|null $neighborhood
     * @return Address
     */
    public function withNeighborhood(?string $neighborhood): Address
    {
        $clone = clone $this;
        $clone->neighborhood = $neighborhood;
        return $clone;
    }

    public static function fromJson(array $json): self
    {
        $result = new self;
        $result->streetAddress1 = $json['streetAddress1'];
        $result->phone = $json['phone'] ?? null;
        $result->city = $json['city'];
        $result->countryIso2Code = $json['countryIso2Code'];
        $result->zipCode = $json['zipCode'] ?? null;
        $result->state = $json['state'] ?? null;
        $result->streetAddress2 = $json['streetAddress2'] ?? null;
        $result->streetAddress3 = $json['streetAddress3'] ?? null;
        $result->buildingNumber = $json['buildingNumber'] ?? null;
        $result->neighborhood = $json['neighborhood'] ?? null;
        return $result;
    }

    public function toJson(): array
    {
        /**
         * Required
         */
        $this->json['streetAddress1'] = $this->getStreetAddress1();
        $this->json['phone'] = $this->getPhone();
        $this->json['city'] = $this->getCity();
        $this->json['countryIso2Code'] = $this->getCountryIso2Code();

        /**
         * Optional
         */
        if ($this->getZipCode()) {
            $this->json['zipCode'] = $this->getZipCode();
        }
        if ($this->getState()) {
            $this->json['state'] = $this->getState();
        }
        if ($this->getStreetAddress2()) {
            $this->json['streetAddress2'] = $this->getStreetAddress2();
        }
        if ($this->getStreetAddress3()) {
            $this->json['streetAddress3'] = $this->getStreetAddress3();
        }
        if ($this->getBuildingNumber()) {
            $this->json['buildingNumber'] = $this->getBuildingNumber();
        }
        if ($this->getNeighborhood()) {
            $this->json['neighborhood'] = $this->getNeighborhood();
        }

        return $this->json;
    }
}
