<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignAffiliatePolicyStatus;

class CampaignAffiliatePolicyStatusMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignAffiliatePolicyStatus
     */
    public function hydrate($value)
    {
        $campaignAffiliatePolicyStatus = new CampaignAffiliatePolicyStatus();
        $campaignAffiliatePolicyStatus->setStatus($value);

        return $campaignAffiliatePolicyStatus;
    }
}