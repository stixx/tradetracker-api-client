<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\AffiliateSiteCategory;

class AffiliateSiteCategoryMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AffiliateSiteCategory
     */
    public function hydrate($value)
    {
        $affiliateSiteCategory = new AffiliateSiteCategory();
        $affiliateSiteCategory->setId($value->ID);
        $affiliateSiteCategory->setName($value->name);

        return $affiliateSiteCategory;
    }
}
