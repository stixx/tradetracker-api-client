<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\Campaign;

class CampaignMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return Campaign
     * @throws \Exception
     */
    public function hydrate($value)
    {
        $campaign = new Campaign();
        $campaign->setId($value->ID);
        $campaign->setName($value->name);
        $campaign->setUrl($value->URL);

        if (null !== $value->info) {
            $campaign->setInfo((new CampaignInfoMapper())->hydrate($value->info));
        }

        return $campaign;
    }
}
