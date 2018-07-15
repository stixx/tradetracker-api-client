<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignAttributionModel;

class CampaignAttributionModelMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignAttributionModel
     */
    public function hydrate($value)
    {
        $campaignAttributionModel = new CampaignAttributionModel();
        $campaignAttributionModel->setAttribute($value);

        return $campaignAttributionModel;
    }
}
