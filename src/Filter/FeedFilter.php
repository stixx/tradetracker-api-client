<?php

namespace Hypeit\TradeTracker\Filter;

class FeedFilter
{
    /**
     * @var int
     */
    private $ID;

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
    private $assignmentStatus;

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
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignID;
    }

    /**
     * @param int $campaignID
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
     * @param int $campaignCategoryID
     */
    public function setCampaignCategoryId($campaignCategoryID)
    {
        $this->campaignCategoryID = $campaignCategoryID;
    }

    /**
     * @return string
     */
    public function getAssignmentStatus()
    {
        return $this->assignmentStatus;
    }

    /**
     * @param string $assignmentStatus
     */
    public function setAssignmentStatus$assignmentStatus)
    {
        $this->assignmentStatus = $assignmentStatus;
    }
}
