<?php

namespace SnowIO\ZigZagDataModel\Order\Product;

class ProductInformation
{
    /** @var array $json */
    private $json;
    /** @var string $itemTitle */
    private $itemTitle;
    /** @var string|null $productDescription */
    private $productDescription = null;
    /** @var string|null $gender */
    private $gender = null;
    /** @var string|null $link */
    private $link = null;
    /** @var string|null $colour */
    private $color = null;
    /** @var string|null $size */
    private $size = null;
    /** @var string|null $imageLink */
    private $imageLink = null;
    /** @var string|null $age */
    private $age = null;
    /** @var float|null $weight */
    private $weight = null;
    /** @var float|null $width */
    private $width = null;
    /** @var float|null $height */
    private $height = null;
    /** @var float|null $length */
    private $length = null;
    /** @var string|null $countryIso2Code */
    private $countryIso2Code = null;
    /** @var string|null $countryOfOriginIso2Code */
    private $countryOfOriginIso2Code = null;
    /** @var string|null $countryOfManufactureIso2Code */
    private $countryOfManufactureIso2Code = null;
    /** @var string|null $fit */
    private $fit = null;
    /** @var string|null $season */
    private $season = null;

    public static function create(): self
    {
        return new self();
    }

    /**
     * @return string
     */
    public function getItemTitle(): string
    {
        return $this->itemTitle;
    }

    /**
     * @param string $itemTitle
     * @return ProductInformation
     */
    public function withItemTitle(string $itemTitle): ProductInformation
    {
        $clone = clone $this;
        $clone->itemTitle = $itemTitle;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    /**
     * @param string|null $productDescription
     * @return ProductInformation
     */
    public function withProductDescription(?string $productDescription): ProductInformation
    {
        $clone = clone $this;
        $clone->productDescription = $productDescription;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     * @return ProductInformation
     */
    public function withGender(?string $gender): ProductInformation
    {
        $clone = clone $this;
        $clone->gender = $gender;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     * @return ProductInformation
     */
    public function withLink(?string $link): ProductInformation
    {
        $clone = clone $this;
        $clone->link = $link;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     * @return ProductInformation
     */
    public function withColor(?string $color): ProductInformation
    {
        $clone = clone $this;
        $clone->color = $color;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getSize(): ?string
    {
        return $this->size;
    }

    /**
     * @param string|null $size
     * @return ProductInformation
     */
    public function withSize(?string $size): ProductInformation
    {
        $clone = clone $this;
        $clone->size = $size;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getImageLink(): ?string
    {
        return $this->imageLink;
    }

    /**
     * @param string|null $imageLink
     * @return ProductInformation
     */
    public function withImageLink(?string $imageLink): ProductInformation
    {
        $clone = clone $this;
        $clone->imageLink = $imageLink;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getAge(): ?string
    {
        return $this->age;
    }

    /**
     * @param string|null $age
     * @return ProductInformation
     */
    public function withAge(?string $age): ProductInformation
    {
        $clone = clone $this;
        $clone->age = $age;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     * @return ProductInformation
     */
    public function withWeight(?float $weight): ProductInformation
    {
        $clone = clone $this;
        $clone->weight = $weight;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * @param float|null $width
     * @return ProductInformation
     */
    public function withWidth(?float $width): ProductInformation
    {
        $clone = clone $this;
        $clone->width = $width;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * @param float|null $height
     * @return ProductInformation
     */
    public function withHeight(?float $height): ProductInformation
    {
        $clone = clone $this;
        $clone->height = $height;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->length;
    }

    /**
     * @param float|null $length
     * @return ProductInformation
     */
    public function withLength(?float $length): ProductInformation
    {
        $clone = clone $this;
        $clone->length = $length;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCountryIso2Code(): ?string
    {
        return $this->countryIso2Code;
    }

    /**
     * @param string|null $countryIso2Code
     * @return ProductInformation
     */
    public function withCountryIso2Code(?string $countryIso2Code): ProductInformation
    {
        $clone = clone $this;
        $clone->countryIso2Code = $countryIso2Code;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCountryOfOriginIso2Code(): ?string
    {
        return $this->countryOfOriginIso2Code;
    }

    /**
     * @param string|null $countryOfOriginIso2Code
     * @return ProductInformation
     */
    public function withCountryOfOriginIso2Code(?string $countryOfOriginIso2Code): ProductInformation
    {
        $clone = clone $this;
        $clone->countryOfOriginIso2Code = $countryOfOriginIso2Code;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCountryOfManufactureIso2Code(): ?string
    {
        return $this->countryOfManufactureIso2Code;
    }

    /**
     * @param string|null $countryOfManufactureIso2Code
     * @return ProductInformation
     */
    public function withCountryOfManufactureIso2Code(?string $countryOfManufactureIso2Code): ProductInformation
    {
        $clone = clone $this;
        $clone->countryOfManufactureIso2Code = $countryOfManufactureIso2Code;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getFit(): ?string
    {
        return $this->fit;
    }

    /**
     * @param string|null $fit
     * @return ProductInformation
     */
    public function withFit(?string $fit): ProductInformation
    {
        $clone = clone $this;
        $clone->fit = $fit;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getSeason(): ?string
    {
        return $this->season;
    }

    /**
     * @param string|null $season
     * @return ProductInformation
     */
    public function withSeason(?string $season): ProductInformation
    {
        $clone = clone $this;
        $clone->season = $season;
        return $clone;
    }

    public static function fromJson(array $json): self
    {
        $result = new self();
        $result->itemTitle = $json['itemTitle'];
        $result->productDescription = $json['productDescription'] ?? null;
        $result->gender = $json['gender'] ?? null;
        $result->link = $json['link'] ?? null;
        $result->color = $json['color'] ?? null;
        $result->size = $json['size'] ?? null;
        $result->imageLink = $json['imageLink'] ?? null;
        $result->age = $json['age'] ?? null;
        $result->weight = $json['weight'] ?? null;
        $result->width = $json['width'] ?? null;
        $result->height = $json['height'] ?? null;
        $result->length = $json['length'] ?? null;
        $result->countryIso2Code = $json['countryIso2Code'] ?? null;
        $result->countryOfOriginIso2Code = $json['countryOfOriginIso2Code'] ?? null;
        $result->countryOfManufactureIso2Code = $json['countryOfManufactureIso2Code'] ?? null;
        $result->fit = $json['fit'] ?? null;
        $result->season = $json['season'] ?? null;
        return $result;
    }

    public function toJson(): array
    {
        /**
         * Required
         */
        $this->json['itemTitle'] = $this->getItemTitle();

        /**
         * Optional
         */
        if ($this->getProductDescription()) {
            $this->json['productDescription'] = $this->getProductDescription();
        }
        if ($this->getGender()) {
            $this->json['gender'] = $this->getGender();
        }
        if ($this->getLink()) {
            $this->json['link'] = $this->getLink();
        }
        if ($this->getColor()) {
            $this->json['color'] = $this->getColor();
        }
        if ($this->getSize()) {
            $this->json['size'] = $this->getSize();
        }
        if ($this->getImageLink()) {
            $this->json['imageLink'] = $this->getImageLink();
        }
        if ($this->getAge()) {
            $this->json['age'] = $this->getAge();
        }
        if ($this->getWeight()) {
            $this->json['weight'] = $this->getWeight();
        }
        if ($this->getWidth()) {
            $this->json['width'] = $this->getWidth();
        }
        if ($this->getHeight()) {
            $this->json['height'] = $this->getHeight();
        }
        if ($this->getLength()) {
            $this->json['length'] = $this->getLength();
        }
        if ($this->getCountryIso2Code()) {
            $this->json['countryIso2Code'] = $this->getCountryIso2Code();
        }
        if ($this->getCountryOfOriginIso2Code()) {
            $this->json['countryOfOriginIso2Code'] = $this->getCountryOfOriginIso2Code();
        }
        if ($this->getCountryOfManufactureIso2Code()) {
            $this->json['countryOfManufactureIso2Code'] = $this->getCountryOfManufactureIso2Code();
        }
        if ($this->getFit()) {
            $this->json['fit'] = $this->getFit();
        }
        if ($this->getSeason()) {
            $this->json['season'] = $this->getSeason();
        }

        return $this->json;
    }
}
