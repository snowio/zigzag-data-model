<?php

namespace SnowIO\ZigZagDataModel\Order;

class OrderData
{
    /** @var array $json */
    private $json = [];
    /** @var string $orderDate */
    private $orderDate;
    /** @var Contact $shippingContact */
    private $shippingContact;
    /** @var Contact|null $billingContact */
    private $billingContact = null;
    /** @var string|null $email */
    private $email = null;
    /** @var float $total */
    private $total;
    /** @var float|null $totalWeight */
    private $totalWeight = null;
    /** @var string $currencyIso3Code */
    private $currencyIso3Code;
    /** @var string|null $source */
    private $source = null;
    /** @var string|null $externalReference */
    private $externalReference = null;
    /** @var float|null $shippingCost */
    private $shippingCost = null;
    /** @var string|null $trackingNumber */
    private $trackingNumber = null;
    /** @var string|null $carrierName */
    private $carrierName = null;
    /** @var string|null $service */
    private $service = null;
    /** @var string|null $customsDescription */
    private $customsDescription = null;
    /** @var string|null $retailerCode */
    private $retailerCode = null;
    /** @var string $retailerName */
    private $retailerName;
    /** @var string $account */
    private $account;
    /** @var string|null $internalAccountNumber */
    private $internalAccountNumber = null;
    /** @var int|null $numberOfParcels */
    private $numberOfParcels = null;
    /** @var string|null $weightUnitOfMeasure */
    private $weightUnitOfMeasure = null;
    /** @var string|null $incoterms */
    private $incoterms = null;
    /** @var int|null $numberOfLabels */
    private $numberOfLabels = null;
    /** @var string|null $airwayBillNumber */
    private $airwayBillNumber = null;
    /** @var string|null $originalATA */
    private $originalATA = null;
    /** @var string|null $customsEntryNumber */
    private $customsEntryNumber = null;
    /** @var string|null $returnCarrier */
    private $returnCarrier = null;
    /** @var string|null $returnTrackingNumber */
    private $returnTrackingNumber = null;
    /** @var string|null $returnLabelLink */
    private $returnLabelLink = null;
    /** @var string|null $returnDCCode */
    private $returnDCCode = null;
    /** @var string|null $customerId */
    private $customerId = null;
    /** @var string|null $dutyPaid */
    private $dutyPaid = null;
    /** @var float|null $dutyPaidValue */
    private $dutyPaidValue = null;
    /** @var string|null $masterAirWaybillNumber */
    private $masterAirWaybillNumber = null;
    /** @var string|null $masterAirWaybillNumberUrl */
    private $masterAirWaybillNumberUrl = null;
    /** @var string|null $houseAirWaybillNumber */
    private $houseAirWaybillNumber = null;
    /** @var ProductCollection $products */
    private $products;

    public static function create()
    {
        return new self;
    }

    /**
     * @return string
     */
    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }

    /**
     * @param string $orderDate
     * @return OrderData
     */
    public function withOrderDate(string $orderDate): OrderData
    {
        $clone = clone $this;
        $clone->orderDate = $orderDate;
        return $clone;
    }

    /**
     * @return Contact
     */
    public function getShippingContact(): Contact
    {
        return $this->shippingContact;
    }

    /**
     * @param Contact $shippingContact
     * @return OrderData
     */
    public function withShippingContact(Contact $shippingContact): OrderData
    {
        $clone = clone $this;
        $clone->shippingContact = $shippingContact;
        return $clone;
    }

    /**
     * @return Contact|null
     */
    public function getBillingContact(): ?Contact
    {
        return $this->billingContact;
    }

    /**
     * @param Contact|null $billingContact
     * @return OrderData
     */
    public function withBillingContact(?Contact $billingContact): OrderData
    {
        $clone = clone $this;
        $clone->billingContact = $billingContact;
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
     * @return OrderData
     */
    public function withEmail(?string $email): OrderData
    {
        $clone = clone $this;
        $clone->email = $email;
        return $clone;
    }

    /**
     * @return float
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }

    /**
     * @param float $total
     * @return OrderData
     */
    public function withTotal(float $total): OrderData
    {
        $clone = clone $this;
        $clone->total = $total;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getTotalWeight(): ?float
    {
        return $this->totalWeight;
    }

    /**
     * @param float|null $totalWeight
     * @return OrderData
     */
    public function withTotalWeight(?float $totalWeight): OrderData
    {
        $clone = clone $this;
        $clone->totalWeight = $totalWeight;
        return $clone;
    }

    /**
     * @return string
     */
    public function getCurrencyIso3Code(): ?string
    {
        return $this->currencyIso3Code;
    }

    /**
     * @param string $currencyIso3Code
     * @return OrderData
     */
    public function withCurrencyIso3Code(string $currencyIso3Code): OrderData
    {
        $clone = clone $this;
        $clone->currencyIso3Code = $currencyIso3Code;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string|null $source
     * @return OrderData
     */
    public function withSource(?string $source): OrderData
    {
        $clone = clone $this;
        $clone->source = $source;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }

    /**
     * @param string|null $externalReference
     * @return OrderData
     */
    public function withExternalReference(?string $externalReference): OrderData
    {
        $clone = clone $this;
        $clone->externalReference = $externalReference;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getShippingCost(): ?float
    {
        return $this->shippingCost;
    }

    /**
     * @param float|null $shippingCost
     * @return OrderData
     */
    public function withShippingCost(?float $shippingCost): OrderData
    {
        $clone = clone $this;
        $clone->shippingCost = $shippingCost;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    /**
     * @param string|null $trackingNumber
     * @return OrderData
     */
    public function withTrackingNumber(?string $trackingNumber): OrderData
    {
        $clone = clone $this;
        $clone->trackingNumber = $trackingNumber;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    /**
     * @param string|null $carrierName
     * @return OrderData
     */
    public function withCarrierName(?string $carrierName): OrderData
    {
        $clone = clone $this;
        $clone->carrierName = $carrierName;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * @param string|null $service
     * @return OrderData
     */
    public function withService(?string $service): OrderData
    {
        $clone = clone $this;
        $clone->service = $service;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCustomsDescription(): ?string
    {
        return $this->customsDescription;
    }

    /**
     * @param string|null $customsDescription
     * @return OrderData
     */
    public function withCustomsDescription(?string $customsDescription): OrderData
    {
        $clone = clone $this;
        $clone->customsDescription = $customsDescription;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getRetailerCode(): ?string
    {
        return $this->retailerCode;
    }

    /**
     * @param string|null $retailerCode
     * @return OrderData
     */
    public function withRetailerCode(?string $retailerCode): OrderData
    {
        $clone = clone $this;
        $clone->retailerCode = $retailerCode;
        return $clone;
    }

    /**
     * @return string
     */
    public function getRetailerName(): ?string
    {
        return $this->retailerName;
    }

    /**
     * @param string $retailerName
     * @return OrderData
     */
    public function withRetailerName(string $retailerName): OrderData
    {
        $clone = clone $this;
        $clone->retailerName = $retailerName;
        return $clone;
    }

    /**
     * @return string
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }

    /**
     * @param string $account
     * @return OrderData
     */
    public function withAccount(string $account): OrderData
    {
        $clone = clone $this;
        $clone->account = $account;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getInternalAccountNumber(): ?string
    {
        return $this->internalAccountNumber;
    }

    /**
     * @param string|null $internalAccountNumber
     * @return OrderData
     */
    public function withInternalAccountNumber(?string $internalAccountNumber): OrderData
    {
        $clone = clone $this;
        $clone->internalAccountNumber = $internalAccountNumber;
        return $clone;
    }

    /**
     * @return int|null
     */
    public function getNumberOfParcels(): ?int
    {
        return $this->numberOfParcels;
    }

    /**
     * @param int|null $numberOfParcels
     * @return OrderData
     */
    public function withNumberOfParcels(?int $numberOfParcels): OrderData
    {
        $clone = clone $this;
        $clone->numberOfParcels = $numberOfParcels;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getWeightUnitOfMeasure(): ?string
    {
        return $this->weightUnitOfMeasure;
    }

    /**
     * @param string|null $weightUnitOfMeasure
     * @return OrderData
     */
    public function withWeightUnitOfMeasure(?string $weightUnitOfMeasure): OrderData
    {
        $clone = clone $this;
        $clone->weightUnitOfMeasure = $weightUnitOfMeasure;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getIncoterms(): ?string
    {
        return $this->incoterms;
    }

    /**
     * @param string|null $incoterms
     * @return OrderData
     */
    public function withIncoterms(?string $incoterms): OrderData
    {
        $clone = clone $this;
        $clone->incoterms = $incoterms;
        return $clone;
    }

    /**
     * @return int|null
     */
    public function getNumberOfLabels(): ?int
    {
        return $this->numberOfLabels;
    }

    /**
     * @param int|null $numberOfLabels
     * @return OrderData
     */
    public function withNumberOfLabels(?int $numberOfLabels): OrderData
    {
        $clone = clone $this;
        $clone->numberOfLabels = $numberOfLabels;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getAirwayBillNumber(): ?string
    {
        return $this->airwayBillNumber;
    }

    /**
     * @param string|null $airwayBillNumber
     * @return OrderData
     */
    public function withAirwayBillNumber(?string $airwayBillNumber): OrderData
    {
        $clone = clone $this;
        $clone->airwayBillNumber = $airwayBillNumber;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getOriginalATA(): ?string
    {
        return $this->originalATA;
    }

    /**
     * @param string|null $originalATA
     * @return OrderData
     */
    public function withOriginalATA(?string $originalATA): OrderData
    {
        $clone = clone $this;
        $clone->originalATA = $originalATA;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCustomsEntryNumber(): ?string
    {
        return $this->customsEntryNumber;
    }

    /**
     * @param string|null $customsEntryNumber
     * @return OrderData
     */
    public function withCustomsEntryNumber(?string $customsEntryNumber): OrderData
    {
        $clone = clone $this;
        $clone->customsEntryNumber = $customsEntryNumber;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getReturnCarrier(): ?string
    {
        return $this->returnCarrier;
    }

    /**
     * @param string|null $returnCarrier
     * @return OrderData
     */
    public function withReturnCarrier(?string $returnCarrier): OrderData
    {
        $clone = clone $this;
        $clone->returnCarrier = $returnCarrier;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getReturnTrackingNumber(): ?string
    {
        return $this->returnTrackingNumber;
    }

    /**
     * @param string|null $returnTrackingNumber
     * @return OrderData
     */
    public function withReturnTrackingNumber(?string $returnTrackingNumber): OrderData
    {
        $clone = clone $this;
        $clone->returnTrackingNumber = $returnTrackingNumber;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getReturnLabelLink(): ?string
    {
        return $this->returnLabelLink;
    }

    /**
     * @param string|null $returnLabelLink
     * @return OrderData
     */
    public function withReturnLabelLink(?string $returnLabelLink): OrderData
    {
        $clone = clone $this;
        $clone->returnLabelLink = $returnLabelLink;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getReturnDCCode(): ?string
    {
        return $this->returnDCCode;
    }

    /**
     * @param string|null $returnDCCode
     * @return OrderData
     */
    public function withReturnDCCode(?string $returnDCCode): OrderData
    {
        $clone = clone $this;
        $clone->returnDCCode = $returnDCCode;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string|null $customerId
     * @return OrderData
     */
    public function withCustomerId(?string $customerId): OrderData
    {
        $clone = clone $this;
        $clone->customerId = $customerId;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getDutyPaid(): ?string
    {
        return $this->dutyPaid;
    }

    /**
     * @param string|null $dutyPaid
     * @return OrderData
     */
    public function withDutyPaid(?string $dutyPaid): OrderData
    {
        $clone = clone $this;
        $clone->dutyPaid = $dutyPaid;
        return $clone;
    }

    /**
     * @return float|null
     */
    public function getDutyPaidValue(): ?float
    {
        return $this->dutyPaidValue;
    }

    /**
     * @param float|null $dutyPaidValue
     * @return OrderData
     */
    public function withDutyPaidValue(?float $dutyPaidValue): OrderData
    {
        $clone = clone $this;
        $clone->dutyPaidValue = $dutyPaidValue;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getMasterAirWaybillNumber(): ?string
    {
        return $this->masterAirWaybillNumber;
    }

    /**
     * @param string|null $masterAirWaybillNumber
     * @return OrderData
     */
    public function withMasterAirWaybillNumber(?string $masterAirWaybillNumber): OrderData
    {
        $clone = clone $this;
        $clone->masterAirWaybillNumber = $masterAirWaybillNumber;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getMasterAirWaybillNumberUrl(): ?string
    {
        return $this->masterAirWaybillNumberUrl;
    }

    /**
     * @param string|null $masterAirWaybillNumberUrl
     * @return OrderData
     */
    public function withMasterAirWaybillNumberUrl(?string $masterAirWaybillNumberUrl): OrderData
    {
        $clone = clone $this;
        $clone->masterAirWaybillNumberUrl = $masterAirWaybillNumberUrl;
        return $clone;
    }

    /**
     * @return string|null
     */
    public function getHouseAirWaybillNumber(): ?string
    {
        return $this->houseAirWaybillNumber;
    }

    /**
     * @param string|null $houseAirWaybillNumber
     * @return OrderData
     */
    public function withHouseAirWaybillNumber(?string $houseAirWaybillNumber): OrderData
    {
        $clone = clone $this;
        $clone->houseAirWaybillNumber = $houseAirWaybillNumber;
        return $clone;
    }

    /**
     * @return ProductCollection
     */
    public function getProducts(): ProductCollection
    {
        return $this->products;
    }

    /**
     * @param ProductCollection $products
     * @return OrderData
     */
    public function withProducts(ProductCollection $products): OrderData
    {
        $clone = clone $this;
        $clone->products = $products;
        return $clone;
    }

    public function toJson(): array
    {
        /**
         * Required
         */
        $this->json['orderDate'] = $this->getOrderDate();
        $this->json['shippingContact'] = $this->getShippingContact()->toJson();
        $this->json['total'] = $this->getTotal();
        $this->json['currencyIso3Code'] = $this->getCurrencyIso3Code();
        $this->json['retailerName'] = $this->getRetailerName();
        $this->json['account'] = $this->getAccount();
        $this->json['products'] = $this->getProducts()->toJson();

        /**
         * Optional
         */
        if ($this->getBillingContact()) {
            $this->json['billingContact'] = $this->getBillingContact()->toJson();
        }
        if ($this->getEmail()) {
            $this->json['email'] = $this->getEmail();
        }
        if ($this->getTotalWeight()) {
            $this->json['totalWeight'] = $this->getTotalWeight();
        }
        if ($this->getSource()) {
            $this->json['source'] = $this->getSource();
        }
        if ($this->getExternalReference()) {
            $this->json['externalReference'] = $this->getExternalReference();
        }
        if ($this->getShippingCost()) {
            $this->json['shippingCost'] = $this->getShippingCost();
        }
        if ($this->getTrackingNumber()) {
            $this->json['trackingNumber'] = $this->getTrackingNumber();
        }
        if ($this->getCarrierName()) {
            $this->json['carrierName'] = $this->getCarrierName();
        }
        if ($this->getService()) {
            $this->json['service'] = $this->getService();
        }
        if ($this->getCustomsDescription()) {
            $this->json['customsDescription'] = $this->getCustomsDescription();
        }
        if ($this->getRetailerCode()) {
            $this->json['retailerCode'] = $this->getRetailerCode();
        }
        if ($this->getInternalAccountNumber()) {
            $this->json['internalAccountNumber'] = $this->getInternalAccountNumber();
        }
        if ($this->getNumberOfParcels()) {
            $this->json['numberOfParcels'] = $this->getNumberOfParcels();
        }
        if ($this->getWeightUnitOfMeasure()) {
            $this->json['weightUnitOfMeasure'] = $this->getWeightUnitOfMeasure();
        }
        if ($this->getIncoterms()) {
            $this->json['incoterms'] = $this->getIncoterms();
        }
        if ($this->getNumberOfLabels()) {
            $this->json['numberOfLabels'] = $this->getNumberOfLabels();
        }
        if ($this->getAirwayBillNumber()) {
            $this->json['airwayBillNumber'] = $this->getAirwayBillNumber();
        }
        if ($this->getOriginalATA()) {
            $this->json['originalATA'] = $this->getOriginalATA();
        }
        if ($this->getCustomsEntryNumber()) {
            $this->json['customsEntryNumber'] = $this->getCustomsEntryNumber();
        }
        if ($this->getReturnCarrier()) {
            $this->json['returnCarrier'] = $this->getReturnCarrier();
        }
        if ($this->getReturnTrackingNumber()) {
            $this->json['returnTrackingNumber'] = $this->getReturnTrackingNumber();
        }
        if ($this->getReturnLabelLink()) {
            $this->json['returnLabelLink'] = $this->getReturnLabelLink();
        }
        if ($this->getReturnDCCode()) {
            $this->json['returnDCCode'] = $this->getReturnDCCode();
        }
        if ($this->getCustomerId()) {
            $this->json['customerId'] = $this->getCustomerId();
        }
        if ($this->getDutyPaid()) {
            $this->json['dutyPaid'] = $this->getDutyPaid();
        }
        if ($this->getDutyPaidValue()) {
            $this->json['dutyPaidValue'] = $this->getDutyPaidValue();
        }
        if ($this->getMasterAirWaybillNumber()) {
            $this->json['masterAirWaybillNumber'] = $this->getMasterAirWaybillNumber();
        }
        if ($this->getMasterAirWaybillNumberUrl()) {
            $this->json['masterAirWaybillNumberUrl'] = $this->getMasterAirWaybillNumberUrl();
        }
        if ($this->getHouseAirWaybillNumber()) {
            $this->json['houseAirWaybillNumber'] = $this->getHouseAirWaybillNumber();
        }

        return $this->json;
    }

    public function equals($other)
    {
        return $other instanceof self && $other->toJson() === $this->toJson();
    }

    private function __construct()
    {
    }
}