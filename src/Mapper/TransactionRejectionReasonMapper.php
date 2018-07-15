<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\TransactionRejectionReason;

class TransactionRejectionReasonMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return TransactionRejectionReason
     */
    public function hydrate($value)
    {
        return new TransactionRejectionReason($value);
    }
}
