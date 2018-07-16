<?php

namespace Hypeit\TradeTracker\Model;

class Touchpoint
{
    /**
     * @var int
     */
    private $affiliateSiteId;

    /**
     * @var string
     */
    private $siteType;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @var int
     */
    private $numImpressions;

    /**
     * @var int
     */
    private $numClicks;

    /**
     * @var bool
     */
    private $isAttributed;

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
    private $reference;

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
     * @return string
     */
    public function getSiteType()
    {
        return $this->siteType;
    }

    /**
     * @param string $siteType
     */
    public function setSiteType($siteType)
    {
        $this->siteType = $siteType;
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
     * @return int
     */
    public function getNumImpressions()
    {
        return $this->numImpressions;
    }

    /**
     * @param int $numImpressions
     */
    public function setNumImpressions($numImpressions)
    {
        $this->numImpressions = $numImpressions;
    }

    /**
     * @return int
     */
    public function getNumClicks()
    {
        return $this->numClicks;
    }

    /**
     * @param int $numClicks
     */
    public function setNumClicks($numClicks)
    {
        $this->numClicks = $numClicks;
    }

    /**
     * @return bool
     */
    public function isAttributed()
    {
        return $this->isAttributed;
    }

    /**
     * @param bool $isAttributed
     */
    public function setIsAttributed($isAttributed)
    {
        $this->isAttributed = $isAttributed;
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
}
