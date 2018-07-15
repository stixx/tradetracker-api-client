<?php

namespace Hypeit\TradeTracker\Model;

class Campaign
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var CampaignInfo
     */
    private $info;

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
     * @return CampaignInfo
     */
    public function getInfo(): CampaignInfo
    {
        return $this->info;
    }

    /**
     * @param CampaignInfo $info
     */
    public function setInfo(CampaignInfo $info)
    {
        $this->info = $info;
    }
}
