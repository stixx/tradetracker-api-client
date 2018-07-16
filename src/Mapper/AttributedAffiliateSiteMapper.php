<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\AttributedAffiliateSite;

class AttributedAffiliateSiteMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AttributedAffiliateSite
     */
    public function hydrate($value)
    {
        $attributedAffiliateSite = new AttributedAffiliateSite();
        $attributedAffiliateSite->setAffiliateSiteId($value->affiliateSiteID);
        $attributedAffiliateSite->setCommission($value->commission);
        $attributedAffiliateSite->setPosition($value->position);
        $attributedAffiliateSite->setIp($value->IP);
        $attributedAffiliateSite->setTransactionType((new TransactionTypeMapper())->hydrate($value->transactionType));
        $attributedAffiliateSite->setTransactionStatus(
            (new TransactionStatusMapper())->hydrate($value->transactionStatus)
        );
        $attributedAffiliateSite->setReference($value->reference);
        $attributedAffiliateSite->setRegistrationDate(new \DateTime($value->registrationDate));

        return $attributedAffiliateSite;
    }
}
