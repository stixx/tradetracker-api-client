<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\ConversionTransaction;
use Hypeit\TradeTracker\Normalizer\IntervalNormalizer;

class ConversionTransactionMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return ConversionTransaction
     * @throws \Exception
     */
    public function hydrate($value)
    {
        $intervalNormalizer = new IntervalNormalizer();

        $conversionTransaction = new ConversionTransaction();
        $conversionTransaction->setId($value->ID);
        $conversionTransaction->setCampaign((new CampaignMapper())->hydrate($value->campaign));
        $conversionTransaction->setCampaignProduct((new CampaignProductMapper())->hydrate($value->campaignProduct));
        $conversionTransaction->setReference($value->reference);
        $conversionTransaction->setTransactionType((new TransactionTypeMapper())->hydrate($value->transactionType));
        $conversionTransaction->setTransactionStatus(
            (new TransactionStatusMapper())->hydrate($value->transactionStatus)
        );
        $conversionTransaction->setNumTouchPointsTotal($value->numTouchPointsTotal);
        $conversionTransaction->setNumTouchPointsAttributed($value->numTouchPointsAttributed);
        $conversionTransaction->setAttributableCommission($value->attributableCommission);
        $conversionTransaction->setDescription($value->description);
        $conversionTransaction->setCurrency($value->currency);
        $conversionTransaction->setCommission($value->commission);
        $conversionTransaction->setOrderAmount($value->orderAmount);
        $conversionTransaction->setIp($value->IP);
        $conversionTransaction->setRegistrationDate(new \DateTime($value->registrationDate));
        $conversionTransaction->setAssessmentDate(new \DateTime($value->assessmentDate));
        $conversionTransaction->setClickToConversion($intervalNormalizer->normalize($value->clickToConversion));
        $conversionTransaction->setOriginatingClickDate(new \DateTime($value->originatingClickDate));
        $conversionTransaction->setRejectionReason(
            (new TransactionRejectionReasonMapper())->hydrate($value->rejectionReason)
        );
        $conversionTransaction->setPaidOut($value->paidOut);
        $conversionTransaction->setCountryCode($value->countryCode);
        $conversionTransaction->setAttributionModel(
            (new CampaignAttributionModelMapper())->hydrate($value->attributionModel)
        );

        return $conversionTransaction;
    }
}
