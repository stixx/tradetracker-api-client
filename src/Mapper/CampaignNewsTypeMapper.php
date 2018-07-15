<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignNewsType;

class CampaignNewsTypeMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignNewsType
     */
    public function hydrate($value)
    {
        return new CampaignNewsType($value);
    }
}
