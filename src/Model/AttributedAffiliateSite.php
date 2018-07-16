<?php

namespace Hypeit\TradeTracker\Model;

class AttributedAffiliateSite
{
    /**
     * @var int
     */
    private $affiliateSiteId;

    /**
     * @var float
     */
    private $commission;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $ip;

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
    private $reference;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @return int
     */
    public function getAffiliateSiteId()
    {
        return $this->affiliateSiteId;
    }

    /**
     * @param int $affiliateSiteId
     */
    public function setAffiliateSiteId($affiliateSiteId)
    {
        $this->affiliateSiteId = $affiliateSiteId;
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
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
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
}
