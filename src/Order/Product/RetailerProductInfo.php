<?php

namespace SnowIO\ZigZagDataModel\Order\Product;

class RetailerProductInfo
{
    /** @var array $json */
    private $json;
    /** @var string $title */
    private $title;
    /** @var string $colour */
    private $colour;
    /** @var string $size */
    private $size;

    public static function create(): self
    {
        return new self();
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return RetailerProductInfo
     */
    public function withTitle(string $title): RetailerProductInfo
    {
        $clone = clone $this;
        $clone->title = $title;
        return $clone;
    }

    /**
     * @return string
     */
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * @param string $colour
     * @return RetailerProductInfo
     */
    public function withColour(string $colour): RetailerProductInfo
    {
        $clone = clone $this;
        $clone->colour = $colour;
        return $clone;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     * @return RetailerProductInfo
     */
    public function withSize(string $size): RetailerProductInfo
    {
        $clone = clone $this;
        $clone->size = $size;
        return $clone;
    }

    public static function fromJson(array $json): self
    {
        $result = new self();
        $result->title = $json['title'];
        $result->colour = $json['colour'];
        $result->size = $json['size'] ?? null;
        return $result;
    }

    public function toJson(): array
    {
        /**
         * Required
         */
        $this->json['title'] = $this->getTitle();
        $this->json['colour'] = $this->getColour();
        $this->json['size'] = $this->getSize();

        return $this->json;
    }
}
