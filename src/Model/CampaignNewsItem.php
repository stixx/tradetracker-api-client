<?php

namespace Hypeit\TradeTracker\Model;

class CampaignNewsItem
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
     * @var CampaignNewsType
     */
    private $campaignNewsType;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $publishDate;

    /**
     * @var \DateTime
     */
    private $expirationDate;

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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param \DateTime $publishDate
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTime $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }
}
