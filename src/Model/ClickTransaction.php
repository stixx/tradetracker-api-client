<?php

namespace Hypeit\TradeTracker\Model;

class ClickTransaction
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Campaign
     */
    private $campaign;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var TransactionType
     */
    private $transactionType;

    /**
     * @var TransactionStatus
     */
    private $transactionStatus;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var float
     */
    private $commission;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @var string
     */
    private $refererUrl;

    /**
     * @var bool
     */
    private $paidOut;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Campaign
     */
    public function getCampaign(): Campaign
    {
        return $this->campaign;
    }

    /**
     * @param Campaign $campaign
     */
    public function setCampaign(Campaign $campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return TransactionType
     */
    public function getTransactionType(): TransactionType
    {
        return $this->transactionType;
    }

    /**
     * @param TransactionType $transactionType
     */
    public function setTransactionType(TransactionType $transactionType)
    {
        $this->transactionType = $transactionType;
    }

    /**
     * @return TransactionStatus
     */
    public function getTransactionStatus(): TransactionStatus
    {
        return $this->transactionStatus;
    }

    /**
     * @param TransactionStatus $transactionStatus
     */
    public function setTransactionStatus(TransactionStatus $transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param \DateTime $registrationDate
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;
    }

    /**
     * @return string
     */
    public function getRefererUrl()
    {
        return $this->refererUrl;
    }

    /**
     * @param string $refererUrl
     */
    public function setRefererUrl($refererUrl)
    {
        $this->refererUrl = $refererUrl;
    }

    /**
     * @return bool
     */
    public function isPaidOut()
    {
        return $this->paidOut;
    }

    /**
     * @param bool $paidOut
     */
    public function setPaidOut(bool $paidOut)
    {
        $this->paidOut = $paidOut;
    }
}
