<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\Touchpoint;

class TouchpointMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return Touchpoint
     */
    public function hydrate($value)
    {
        $touchpoint = new Touchpoint();
        $touchpoint->setAffiliateSiteId($value->affiliateSiteID);
        $touchpoint->setSiteType($value->siteType);
        $touchpoint->setRegistrationDate($value->registrationDate);
        $touchpoint->setNumImpressions($value->numImpressions);
        $touchpoint->setNumClicks($value->numClicks);
        $touchpoint->setIsAttributed($value->isAttributed);
        $touchpoint->setCommission($value->commission);
        $touchpoint->setPosition($value->position);
        $touchpoint->setReference($value->reference);

        return $touchpoint;
    }
}
