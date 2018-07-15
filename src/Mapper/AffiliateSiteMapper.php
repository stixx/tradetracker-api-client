<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\AffiliateSite;

class AffiliateSiteMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AffiliateSite
     */
    public function hydrate($value)
    {
        $affiliateSite = new AffiliateSite();
        $affiliateSite->setId($value->ID);
        $affiliateSite->setName($value->name);
        $affiliateSite->setUrl($value->URL);
        $affiliateSite->setInfo((new AffiliateSiteInfoMapper())->hydrate($value->info));

        return $affiliateSite;
    }
}