<?php
namespace SnowIO\ZigZagDataModel\Webhook;

class Product
{
    private $json;

    public static function fromJson(array $json): self
    {
        $result = new self();
        $result->json = $json;
        return $result;
    }

    public function withProductSku(string $productSku): self
    {
        $result = clone $this;
        $result->json['productSku'] = $productSku;
        return $result;
    }

    public function withProductTitle(string $productTitle): self
    {
        $result = clone $this;
        $result->json['productTitle'] = $productTitle;
        return $result;
    }

    public function withGrade(string $grade): self
    {
        $result = clone $this;
        $result->json['grade'] = $grade;
        return $result;
    }

    public function withQuantity(string $quantity): self
    {
        $result = clone $this;
        $result->json['quantity'] = $quantity;
        return $result;
    }

    public function withReturnReason(string $returnReason): self
    {
        $result = clone $this;
        $result->json['returnReason'] = $returnReason;
        return $result;
    }

    public function withCurrency(string $currency): self
    {
        $result = clone $this;
        $result->json['currency'] = $currency;
        return $result;
    }

    public function withItemCost(string $itemCost): self
    {
        $result = clone $this;
        $result->json['itemCost'] = $itemCost;
        return $result;
    }

    public function withReturnOption(string $returnOption): self
    {
        $result = clone $this;
        $result->json['returnOption'] = $returnOption;
        return $result;
    }

    public function withNotes(string $notes): self
    {
        $result = clone $this;
        $result->json['notes'] = $notes;
        return $result;
    }

    public function withNotesContent(string $notesContent): self
    {
        $result = clone $this;
        $result->json['notesContent'] = $notesContent;
        return $result;
    }

    public function getProductSku(): string
    {
        return $this->json['productSku'];
    }

    public function getProductTitle(): string
    {
        return $this->json['productTitle'];
    }

    public function getGrade(): string
    {
        return $this->json['grade'];
    }

    public function getQuantity(): string
    {
        return $this->json['quantity'];
    }

    public function getReturnReason(): string
    {
        return $this->json['returnReason'];
    }

    public function getCurrency(): string
    {
        return $this->json['currency'];
    }

    public function getItemCost(): string
    {
        return $this->json['itemCost'];
    }

    public function getReturnOption(): string
    {
        return $this->json['returnOption'];
    }

    public function getNotes(): string
    {
        return $this->json['notes'];
    }

    public function getNotesContent(): string
    {
        return $this->json['notesContent'];
    }

    public function toJson(): array
    {
        return $this->json;
    }

    public function equals($other): bool
    {
        return $other instanceof self &&
            $other->toJson() === $this->toJson();
    }

    private function __construct()
    {
    }
}
