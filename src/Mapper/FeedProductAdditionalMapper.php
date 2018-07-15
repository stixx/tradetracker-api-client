<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\FeedProductAdditional;

class FeedProductAdditionalMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return FeedProductAdditional
     */
    public function hydrate($value)
    {
        $feedProductAdditional = new FeedProductAdditional();
        $feedProductAdditional->setName($value->name);
        $feedProductAdditional->setValue($value->value);

        return $feedProductAdditional;
    }
}
