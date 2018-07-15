<?php

namespace Hypeit\TradeTracker\Filter;

use Hypeit\TradeTracker\Model\SortDirection;
use Hypeit\TradeTracker\Model\TransactionConversionSort;
use Hypeit\TradeTracker\Model\TransactionStatus;
use Hypeit\TradeTracker\Model\TransactionType;

class ConversionTransactionFilter
{
    /**
     * @var int
     */
    private $ID;

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
    private $registrationDateFrom;

    /**
     * @var string
     */
    private $registrationDateTo;

    /**
     * @var string
     */
    private $assessmentDateTo;

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
     * @var TransactionConversionSort
     */
    private $sort;

    /**
     * @var SortDirection
     */
    private $sortDirection;

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
    public function getAssessmentDateTo()
    {
        return $this->assessmentDateTo;
    }

    /**
     * @param string $assessmentDateTo
     */
    public function setAssessmentDateTo($assessmentDateTo)
    {
        $this->assessmentDateTo = $assessmentDateTo;
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

    /**
     * @return TransactionConversionSort
     */
    public function getSort(): TransactionConversionSort
    {
        return $this->sort;
    }

    /**
     * @param TransactionConversionSort $sort
     */
    public function setSort(TransactionConversionSort $sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return SortDirection
     */
    public function getSortDirection(): SortDirection
    {
        return $this->sortDirection;
    }

    /**
     * @param SortDirection $sortDirection
     */
    public function setSortDirection(SortDirection $sortDirection)
    {
        $this->sortDirection = $sortDirection;
    }
}
