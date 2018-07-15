<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\TransactionType;

class TransactionTypeMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return TransactionType
     */
    public function hydrate($value)
    {
        return new TransactionType($value);
    }
}
