<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\TransactionStatus;

class TransactionStatusMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return TransactionStatus
     */
    public function hydrate($value)
    {
        return new TransactionStatus($value);
    }
}
