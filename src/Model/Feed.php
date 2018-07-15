<?php

namespace Hypeit\TradeTracker\Model;

class Feed
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
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var \DateTime
     */
    private $updateDate;

    /**
     * @var \DateInterval
     */
    private $updateInterval;

    /**
     * @var int
     */
    private $productCount;

    /**
     * @var CampaignAssignmentStatus
     */
    private $assignmentStatus;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * @return \DateInterval
     */
    public function getUpdateInterval()
    {
        return $this->updateInterval;
    }

    /**
     * @param \DateInterval $updateInterval
     */
    public function setUpdateInterval($updateInterval)
    {
        $this->updateInterval = $updateInterval;
    }

    /**
     * @return int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     */
    public function setProductCount($productCount)
    {
        $this->productCount = $productCount;
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
}
