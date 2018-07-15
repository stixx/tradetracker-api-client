<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\AffiliateSiteType;

class AffiliateSiteTypeMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AffiliateSiteType
     */
    public function hydrate($value)
    {
        $affiliateSiteType = new AffiliateSiteType();
        $affiliateSiteType->setId($value->ID);
        $affiliateSiteType->setName($value->name);

        return $affiliateSiteType;
    }
}