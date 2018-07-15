<?php

namespace Hypeit\TradeTracker\Filter;

use Hypeit\TradeTracker\Model\AffiliateSiteSort;
use Hypeit\TradeTracker\Model\AffiliateSiteStatus;
use Hypeit\TradeTracker\Model\SortDirection;

class AffiliateSiteFilter
{
    /**
     * @var int
     */
    private $ID;

    /**
     * @var string
     */
    private $query;

    /**
     * @var int
     */
    private $affiliateSiteCategoryID;

    /**
     * @var int
     */
    private $affiliateSiteTypeID;

    /**
     * @var AffiliateSiteStatus
     */
    private $affiliateSiteStatus;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var AffiliateSiteSort
     */
    private $sort;

    /**
     * @var SortDirection
     */
    private $sortDirection;

    /**
     * @var bool
     */
    private $excludeInfo;

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
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param string $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * @return int
     */
    public function getAffiliateSiteCategoryId()
    {
        return $this->affiliateSiteCategoryID;
    }

    /**
     * @param int $affiliateSiteCategoryID
     */
    public function setAffiliateSiteCategoryId($affiliateSiteCategoryID)
    {
        $this->affiliateSiteCategoryID = $affiliateSiteCategoryID;
    }

    /**
     * @return int
     */
    public function getAffiliateSiteTypeId()
    {
        return $this->affiliateSiteTypeID;
    }

    /**
     * @param int $affiliateSiteTypeID
     */
    public function setAffiliateSiteTypeId($affiliateSiteTypeID)
    {
        $this->affiliateSiteTypeID = $affiliateSiteTypeID;
    }

    /**
     * @return string
     */
    public function getAffiliateSiteStatus()
    {
        return $this->affiliateSiteStatus->getStatus();
    }

    /**
     * @param AffiliateSiteStatus $affiliateSiteStatus
     */
    public function setAffiliateSiteStatus(AffiliateSiteStatus $affiliateSiteStatus)
    {
        $this->affiliateSiteStatus = $affiliateSiteStatus;
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
     * @return int|string|null
     */
    public function getSort()
    {
        return $this->sort->getSort();
    }

    /**
     * @param AffiliateSiteSort $sort
     */
    public function setSort(AffiliateSiteSort $sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return string
     */
    public function getSortDirection()
    {
        return $this->sortDirection->getSort();
    }

    /**
     * @param SortDirection $sortDirection
     */
    public function setSortDirection(SortDirection $sortDirection)
    {
        $this->sortDirection = $sortDirection;
    }

    /**
     * @return bool
     */
    public function isExcludeInfo()
    {
        return $this->excludeInfo;
    }

    /**
     * @param bool $excludeInfo
     */
    public function setExcludeInfo(bool $excludeInfo)
    {
        $this->excludeInfo = $excludeInfo;
    }
}