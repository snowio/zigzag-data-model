<?php
namespace SnowIO\ZigZagDataModel\Product;

class ProductInformation
{
    private $json = [];

    public static function of(string $name, string $countryCode): self
    {
        $result = new self;
        $result->json['name'] = $name;
        $result->json['countryCode'] = $countryCode;
        return $result;
    }

    public function withName(string $name): self
    {
        $result = clone $this;
        $result->json['name'] = $name;
        return $result;
    }

    public function withDescription(string $description): self
    {
        $result = clone $this;
        $result->json['description'] = $description;
        return $result;
    }

    public function withGender(string $gender): self
    {
        $result = clone $this;
        $result->json['gender'] = $gender;
        return $result;
    }

    public function withLink(string $link): self
    {
        $result = clone $this;
        $result->json['link'] = $link;
        return $result;
    }

    public function withColor(string $color): self
    {
        $result = clone $this;
        $result->json['color'] = $color;
        return $result;
    }

    public function withSize(string $size): self
    {
        $result = clone $this;
        $result->json['size'] = $size;
        return $result;
    }

    public function withImageLink(string $imageLink): self
    {
        $result = clone $this;
        $result->json['imageLink'] = $imageLink;
        return $result;
    }

    public function withAge(string $age): self
    {
        $result = clone $this;
        $result->json['age'] = $age;
        return $result;
    }

    public function withWeight(float $weight): self
    {
        $result = clone $this;
        $result->json['weight'] = $weight;
        return $result;
    }

    public function withWidth(float $width): self
    {
        $result = clone $this;
        $result->json['width'] = $width;
        return $result;
    }

    public function withHeight(float $height): self
    {
        $result = clone $this;
        $result->json['height'] = $height;
        return $result;
    }

    public function withLength(float $length): self
    {
        $result = clone $this;
        $result->json['length'] = $length;
        return $result;
    }

    public function withCountryCode(string $countryCode): self
    {
        $result = clone $this;
        $this->json['countryCode'] = $countryCode;
        return $result;
    }

    public function withCountryOfOriginIso2Code(string $countryOfOriginIso2Code): self
    {
        $result = clone $this;
        $result->json['countryOfOriginIso2Code'] = $countryOfOriginIso2Code;
        return $result;
    }

    public function withFit(string $fit): self
    {
        $result = clone $this;
        $result->json['fit'] = $fit;
        return $result;
    }

    public function season(string $season): self
    {
        $result = clone $this;
        $result->json['season'] = $season;
        return $result;
    }

    public function toJson(): array
    {
        return $this->json;
    }

    public function equals($other): bool
    {
        return $other instanceof self &&
            $this->json === $other->json;
    }

    private function __construct()
    {
    }
}
