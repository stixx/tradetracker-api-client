<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignAssignmentStatus;

class CampaignAssignmentStatusMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignAssignmentStatus
     */
    public function hydrate($value)
    {
        $campaignAssignmentStatus = new CampaignAssignmentStatus();
        $campaignAssignmentStatus->setStatus($value);

        return $campaignAssignmentStatus;
    }
}
