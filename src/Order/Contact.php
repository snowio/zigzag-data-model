<?php

namespace SnowIO\ZigZagDataModel\Order;

use SnowIO\ZigZagDataModel\Order\Contact\Address;

class Contact
{
    /** @var array $json */
    private $json;
    /** @var Address $address */
    private $address;
    /** @var string $firstName */
    private $firstName;
    /** @var string|null $lastName */
    private $lastName = null;
    /** @var string|null $salutation */
    private $salutation = null;
    /** @var string|null $email */
    private $email = null;
    /** @var int|null $customerType */
    private $customerType = null;

    public static function create(): self
    {
        return new self();
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Contact
     */
    public function withAddress(Address $address): Contact
    {
        $clone = clone $this;
        $clone->address = $address;
        return $clone;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Contact
     */
    public function withFirstName(string $firstName): Contact
    {
        $clone = clone $this;
        $clone->firstName = $firstName;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return Contact
     */
    public function withLastName(?string $lastName): Contact
    {
        $clone = clone $this;
        $clone->lastName = $lastName;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    /**
     * @param string|null $salutation
     * @return Contact
     */
    public function withSalutation(?string $salutation): Contact
    {
        $clone = clone $this;
        $clone->salutation = $salutation;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Contact
     */
    public function withEmail(?string $email): Contact
    {
        $clone = clone $this;
        $clone->email = $email;
        return $clone;
    }

    /**
     * @return int|null
     */
    public function getCustomerType(): ?int
    {
        return $this->customerType;
    }

    /**
     * @param int|null $customerType
     * @return Contact
     */
    public function withCustomerType(?int $customerType): Contact
    {
        $clone = clone $this;
        $clone->customerType = $customerType;
        return $clone;
    }

    public static function fromJson(array $json): self
    {
        $result = new self();
        $result->address = Address::fromJson($json['address']);
        $result->firstName = $json['firstName'];
        $result->lastName = $json['lastName'] ?? null;
        $result->salutation = $json['salutation'] ?? null;
        $result->email = $json['email'] ?? null;
        $result->customerType = $json['customerType'] ?? null;
        return $result;
    }

    public function toJson(): array
    {
        /**
         * Required
         */
        $this->json['address'] = $this->address->toJson();
        $this->json['firstName'] = $this->getFirstName();

        /**
         * Optional
         */
        if ($this->getLastName()) {
            $this->json['lastName'] = $this->getLastName();
        }
        if ($this->getSalutation()) {
            $this->json['salutation'] = $this->getSalutation();
        }
        if ($this->getEmail()) {
            $this->json['email'] = $this->getEmail();
        }
        if ($this->getCustomerType()) {
            $this->json['customerType'] = $this->getCustomerType();
        }

        return $this->json;
    }
}
