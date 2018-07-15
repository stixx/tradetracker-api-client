<?php

namespace Hypeit\TradeTracker\Model;

class CampaignNewsType
{
    const CAMPAIGN_START = 'campaign_start';
    const CAMPAIGN_STOP = 'campaign_stop';
    const CAMPAIGN_UPDATE_GENERAL = 'campaign_update_general';
    const CAMPAIGN_UPDATE_VOUCHERCODE = 'campaign_update_vouchercode';
    const CAMPAIGN_UPDATE_CONSUMER = 'campaign_update_consumer';
    const CAMPAIGN_UPDATE_COMMISSION = 'campaign_update_commission';
    const CAMPAIGN_UPDATE_INCENTIVE = 'campaign_update_incentive';
    const CAMPAIGN_UPDATE_MATERIAL = 'campaign_update_material';
    const CAMPAIGN_UPDATE_FEED = 'campaign_update_feed';
    const CAMPAIGN_UPDATE_URGENT = 'campaign_update_urgent';
    const CAMPAIGN_UPDATE_ATTRIBUTION = 'campaign_update_attribution';

    /**
     * @var string
     */
    private $type;

    /**
     * CampaignNewsType constructor.
     *
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
