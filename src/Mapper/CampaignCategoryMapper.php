<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignCategory;

class CampaignCategoryMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignCategory
     */
    public function hydrate($value)
    {
        $campaignCategory = new CampaignCategory();
        $campaignCategory->setId($value->ID);
        $campaignCategory->setName($value->name);

        if (null !== $value->categories) {
            $categories = [];

            foreach ($value->categories as $category) {
                $categories[] = $this->hydrate($category);
            }

            $campaignCategory->setCategories($categories);
        }

        return $campaignCategory;
    }
}