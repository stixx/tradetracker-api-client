<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\ClickTransaction;

class ClickTransactionMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return ClickTransaction
     * @throws \Exception
     */
    public function hydrate($value)
    {
        $clickTransaction = new ClickTransaction();
        $clickTransaction->setId($value->ID);
        $clickTransaction->setCampaign((new CampaignMapper())->hydrate($value->campaign));
        $clickTransaction->setReference($value->reference);
        $clickTransaction->setTransactionType((new TransactionTypeMapper())->hydrate($value->transactionType));
        $clickTransaction->setTransactionStatus((new TransactionStatusMapper())->hydrate($value->transactionStatus));
        $clickTransaction->setCurrency($value->currency);
        $clickTransaction->setCommission($value->commission);
        $clickTransaction->setRegistrationDate(new \DateTime($value->registrationDate));
        $clickTransaction->setRefererUrl($value->refererURL);
        $clickTransaction->setPaidOut($value->paidOut);

        return $clickTransaction;
    }
}
