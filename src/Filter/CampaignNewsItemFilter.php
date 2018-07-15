<?php

namespace Hypeit\TradeTracker\Filter;

use Hypeit\TradeTracker\Model\CampaignNewsType;

class CampaignNewsItemFilter
{
    /**
     * @var
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
     * @var CampaignNewsType
     */
    private $campaignNewsType;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $offset;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
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
     * @return CampaignNewsType
     */
    public function getCampaignNewsType(): CampaignNewsType
    {
        return $this->campaignNewsType;
    }

    /**
     * @param CampaignNewsType $campaignNewsType
     */
    public function setCampaignNewsType(CampaignNewsType $campaignNewsType)
    {
        $this->campaignNewsType = $campaignNewsType;
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
