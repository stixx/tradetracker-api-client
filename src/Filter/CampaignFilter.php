<?php

namespace Hypeit\TradeTracker\Filter;

use Hypeit\TradeTracker\Model\CampaignAffiliatePolicyStatus;
use Hypeit\TradeTracker\Model\CampaignAssignmentStatus;
use Hypeit\TradeTracker\Model\CampaignSort;
use Hypeit\TradeTracker\Model\SortDirection;

class CampaignFilter
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
    private $campaignCategoryID;

    /**
     * @var CampaignAssignmentStatus
     */
    private $assignmentStatus;

    /**
     * @var CampaignAffiliatePolicyStatus
     */
    private $policySearchEngineMarketingStatus;

    /**
     * @var CampaignAffiliatePolicyStatus
     */
    private $policyEmailMarketingStatus;

    /**
     * @var CampaignAffiliatePolicyStatus
     */
    private $policyCashbackStatus;

    /**
     * @var CampaignAffiliatePolicyStatus
     */
    private $policyDiscountCodeStatus;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $offset;

    /**
     * @var CampaignSort
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
    public function getCampaignCategoryId()
    {
        return $this->campaignCategoryID;
    }

    /**
     * @param int $campaignCategoryID
     */
    public function setCampaignCategoryId($campaignCategoryID)
    {
        $this->campaignCategoryID = $campaignCategoryID;
    }

    /**
     * @return CampaignAssignmentStatus
     */
    public function getAssignmentStatus(): CampaignAssignmentStatus
    {
        return $this->assignmentStatus;
    }

    /**
     * @param CampaignAssignmentStatus $assignmentStatus
     */
    public function setAssignmentStatus(CampaignAssignmentStatus $assignmentStatus)
    {
        $this->assignmentStatus = $assignmentStatus;
    }

    /**
     * @return CampaignAffiliatePolicyStatus
     */
    public function getPolicySearchEngineMarketingStatus(): CampaignAffiliatePolicyStatus
    {
        return $this->policySearchEngineMarketingStatus;
    }

    /**
     * @param CampaignAffiliatePolicyStatus $policySearchEngineMarketingStatus
     */
    public function setPolicySearchEngineMarketingStatus(
        CampaignAffiliatePolicyStatus $policySearchEngineMarketingStatus
    ) {
        $this->policySearchEngineMarketingStatus = $policySearchEngineMarketingStatus;
    }

    /**
     * @return CampaignAffiliatePolicyStatus
     */
    public function getPolicyEmailMarketingStatus(): CampaignAffiliatePolicyStatus
    {
        return $this->policyEmailMarketingStatus;
    }

    /**
     * @param CampaignAffiliatePolicyStatus $policyEmailMarketingStatus
     */
    public function setPolicyEmailMarketingStatus(CampaignAffiliatePolicyStatus $policyEmailMarketingStatus)
    {
        $this->policyEmailMarketingStatus = $policyEmailMarketingStatus;
    }

    /**
     * @return CampaignAffiliatePolicyStatus
     */
    public function getPolicyCashbackStatus(): CampaignAffiliatePolicyStatus
    {
        return $this->policyCashbackStatus;
    }

    /**
     * @param CampaignAffiliatePolicyStatus $policyCashbackStatus
     */
    public function setPolicyCashbackStatus(CampaignAffiliatePolicyStatus $policyCashbackStatus)
    {
        $this->policyCashbackStatus = $policyCashbackStatus;
    }

    /**
     * @return CampaignAffiliatePolicyStatus
     */
    public function getPolicyDiscountCodeStatus(): CampaignAffiliatePolicyStatus
    {
        return $this->policyDiscountCodeStatus;
    }

    /**
     * @param CampaignAffiliatePolicyStatus $policyDiscountCodeStatus
     */
    public function setPolicyDiscountCodeStatus(CampaignAffiliatePolicyStatus $policyDiscountCodeStatus)
    {
        $this->policyDiscountCodeStatus = $policyDiscountCodeStatus;
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
     * @return CampaignSort
     */
    public function getSort(): CampaignSort
    {
        return $this->sort;
    }

    /**
     * @param CampaignSort $sort
     */
    public function setSort(CampaignSort $sort)
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
