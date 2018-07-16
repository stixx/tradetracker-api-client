<?php

namespace Hypeit\TradeTracker\Model;

class CreateConversionTransactionOptions
{
    /**
     * @var int
     */
    private $campaignID;

    /**
     * @var int
     */
    private $campaignProductID;

    /**
     * @var string
     */
    private $characteristic;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var float
     */
    private $transactionAmount;

    /**
     * @return int
     */
    public function getCampaignId(): int
    {
        return $this->campaignID;
    }

    /**
     * @param int $campaignID
     */
    public function setCampaignId(int $campaignID)
    {
        $this->campaignID = $campaignID;
    }

    /**
     * @return int
     */
    public function getCampaignProductId(): int
    {
        return $this->campaignProductID;
    }

    /**
     * @param int $campaignProductID
     */
    public function setCampaignProductId(int $campaignProductID)
    {
        $this->campaignProductID = $campaignProductID;
    }

    /**
     * @return string
     */
    public function getCharacteristic(): string
    {
        return $this->characteristic;
    }

    /**
     * @param string $characteristic
     */
    public function setCharacteristic(string $characteristic)
    {
        $this->characteristic = $characteristic;
    }

    /**
     * @return string
     */
    public function getRemarks(): string
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     */
    public function setRemarks(string $remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return float
     */
    public function getTransactionAmount(): float
    {
        return $this->transactionAmount;
    }

    /**
     * @param float $transactionAmount
     */
    public function setTransactionAmount(float $transactionAmount)
    {
        $this->transactionAmount = $transactionAmount;
    }
}
