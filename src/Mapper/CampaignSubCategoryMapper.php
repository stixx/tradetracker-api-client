<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignSubCategory;

class CampaignSubCategoryMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignSubCategory
     */
    public function hydrate($value)
    {
        $campaignSubCategory = new CampaignSubCategory();
        $campaignSubCategory->setId($value->ID);
        $campaignSubCategory->setName($value->name);

        return $campaignSubCategory;
    }
}
