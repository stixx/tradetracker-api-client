<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\AffiliateSiteStatus;

class AffiliateSiteStatusMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AffiliateSiteStatus
     */
    public function hydrate($value)
    {
        $affiliateSiteStatus = new AffiliateSiteStatus();
        $affiliateSiteStatus->setStatus($value);

        return $affiliateSiteStatus;
    }
}
