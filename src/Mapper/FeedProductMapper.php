<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\FeedProduct;

class FeedProductMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return FeedProduct
     */
    public function hydrate($value)
    {
        $feedProduct = new FeedProduct();
        $feedProduct->setIdentifier($value->identifier);
        $feedProduct->setName($value->name);
        $feedProduct->setProductCategoryName($value->productCategoryName);
        $feedProduct->setDescription($value->description);
        $feedProduct->setPrice($value->price);
        $feedProduct->setProductUrl($value->productURL);
        $feedProduct->setImageUrl($value->imageURL);

        if (is_array($value->additional)) {
            $data = [];
            $feedProductAdditionalMapper = new FeedProductAdditionalMapper();

            foreach ($value->additional as $additional) {
                $data[] = $feedProductAdditionalMapper->hydrate($additional);
            }

            $feedProduct->setAdditional($data);
        }

        return $feedProduct;
    }
}
