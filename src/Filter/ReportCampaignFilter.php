<?php

namespace Hypeit\TradeTracker\Filter;

class ReportCampaignFilter extends ReportAffiliateSiteFilter
{
    /**
     * @var int
     */
    protected $campaignID;

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
}
