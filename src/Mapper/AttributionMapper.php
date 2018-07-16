<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\Attribution;

class AttributionMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return Attribution
     */
    public function hydrate($value)
    {
        $attributedAffiliateSiteMapper = new AttributedAffiliateSiteMapper();

        $attribution = new Attribution();
        $data = [];

        foreach ($value->affiliateSites as $affiliateSite) {
            $data[] = $attributedAffiliateSiteMapper->hydrate($affiliateSite);
        }

        $attribution->setAffiliateSites($data);

        return $attribution;
    }
}
