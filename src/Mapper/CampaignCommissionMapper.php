<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignCommission;

class CampaignCommissionMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignCommission
     */
    public function hydrate($value)
    {
        $campaignCommission = new CampaignCommission();
        $campaignCommission->setImpressionCommission($value->impressionCommission);
        $campaignCommission->setClickCommission($value->clickCommission);
        $campaignCommission->setFixedCommission($value->fixedCommission);
        $campaignCommission->setLeadCommission($value->leadCommission);
        $campaignCommission->setSaleCommissionFixed($value->saleCommissionFixed);
        $campaignCommission->setSaleCommissionVariable($value->saleCommissionVariable);
        $campaignCommission->setILeadCommission($value->iLeadCommission);
        $campaignCommission->setISaleCommissionFixed($value->iSaleCommissionFixed);
        $campaignCommission->setISaleCommissionVariable($value->iSaleCommissionVariable);

        return $campaignCommission;
    }
}