<?php

namespace SnowIO\ZigZagDataModel\Warehouse;

class Contact
{
    private $json = [];

    public static function create(): self
    {
        return new self;
    }

    public function withSalutation(string $salutation): self
    {
        $result = clone $this;
        $result->json['salutation'] = $salutation;
        return $result;
    }


    public function withEmail(string $email): self
    {
        $result = clone $this;
        $result->json['email'] = $email;
        return $result;
    }


    public function withFirstName(string $firstName): self
    {
        $result = clone $this;
        $result->json['firstName'] = $firstName;
        return $result;
    }


    public function withLastName(string $lastName): self
    {
        $result = clone $this;
        $result->json['lastName'] = $lastName;
        return $result;
    }


    public function withPhone(string $phone): self
    {
        $result = clone $this;
        $result->json['phone'] = $phone;
        return $result;
    }


    public function withContactType(int $contactType): self
    {
        $result = clone $this;
        $result->json['contactType'] = $contactType;
        return $result;
    }


    public function getSalutation(): string
    {
        return $this->json['salutation'];
    }


    public function getEmail(): string
    {
        return $this->json['email'];
    }


    public function getFirstName(): string
    {
        return $this->json['firstName'];
    }


    public function getLastName(): string
    {
        return $this->json['lastName'];
    }


    public function getPhone(): string
    {
        return $this->json['phone'];
    }


    public function getContactType(): int
    {
        return $this->json['contactType'];
    }


    public function toJson(): array
    {
        return $this->json;
    }


    private function __construct()
    {
    }
}
