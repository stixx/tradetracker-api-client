<?php

namespace Hypeit\TradeTracker\Filter;

use Hypeit\TradeTracker\Model\TransactionStatus;

class ClickTransactionFilter
{
    /**
     * @var int
     */
    private $ID;

    /**
     * @var TransactionStatus
     */
    private $transactionStatus;

    /**
     * @var string
     */
    private $registrationDateFrom;

    /**
     * @var string
     */
    private $registrationDateTo;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $offset;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     */
    public function setId($ID)
    {
        $this->ID = $ID;
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
    public function getRegistrationDateFrom()
    {
        return $this->registrationDateFrom;
    }

    /**
     * @param string $registrationDateFrom
     */
    public function setRegistrationDateFrom($registrationDateFrom)
    {
        $this->registrationDateFrom = $registrationDateFrom;
    }

    /**
     * @return string
     */
    public function getRegistrationDateTo()
    {
        return $this->registrationDateTo;
    }

    /**
     * @param string $registrationDateTo
     */
    public function setRegistrationDateTo($registrationDateTo)
    {
        $this->registrationDateTo = $registrationDateTo;
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
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }
}
