<?php

namespace Hypeit\TradeTracker\Filter;

class FeedProductFilter
{
    /**
     * @var int
     */
    private $feedID;

    /**
     * @var string
     */
    private $feedCategoryName;

    /**
     * @var int
     */
    private $campaignID;

    /**
     * @var int
     */
    private $campaignCategoryID;

    /**
     * @var string
     */
    private $query;

    /**
     * @var float
     */
    private $priceFrom;

    /**
     * @var float
     */
    private $priceTo;

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
    public function getFeedId()
    {
        return $this->feedID;
    }

    /**
     * @param $feedID
     */
    public function setFeedId($feedID)
    {
        $this->feedID = $feedID;
    }

    /**
     * @return string
     */
    public function getFeedCategoryName()
    {
        return $this->feedCategoryName;
    }

    /**
     * @param $feedCategoryName
     */
    public function setFeedCategoryName($feedCategoryName)
    {
        $this->feedCategoryName = $feedCategoryName;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignID;
    }

    /**
     * @param $campaignID
     */
    public function setCampaignId($campaignID)
    {
        $this->campaignID = $campaignID;
    }

    /**
     * @return int
     */
    public function getCampaignCategoryId()
    {
        return $this->campaignCategoryID;
    }

    /**
     * @param $campaignCategoryID
     */
    public function setCampaignCategoryId($campaignCategoryID)
    {
        $this->campaignCategoryID = $campaignCategoryID;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * @return float
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * @param $priceFrom
     */
    public function setPriceFrom($priceFrom)
    {
        $this->priceFrom = $priceFrom;
    }

    /**
     * @return float
     */
    public function getPriceTo()
    {
        return $this->priceTo;
    }

    /**
     * @param $priceTo
     */
    public function setPriceTo($priceTo)
    {
        $this->priceTo = $priceTo;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param $limit
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
     * @param $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }
}
