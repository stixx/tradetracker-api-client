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
        return new CampaignAffiliatePolicyStatus($value);
    }
}
