<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignCommissionProduct;

class CampaignCommissionProductMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignCommissionProduct
     */
    public function hydrate($value)
    {
        $campaignCommissionProduct = new CampaignCommissionProduct();
        $campaignCommissionProduct->setCampaignProduct((new CampaignProductMapper())->hydrate($value->campaignProduct));
        $campaignCommissionProduct->setLeadCommission($value->leadCommission);
        $campaignCommissionProduct->setSaleCommissionFixed($value->saleCommissionFixed);
        $campaignCommissionProduct->setSaleCommissionVariable($value->saleCommissionVariable);
        $campaignCommissionProduct->setILeadCommission($value->iLeadCommission);
        $campaignCommissionProduct->setISaleCommissionFixed($value->iSaleCommissionFixed);
        $campaignCommissionProduct->setISaleCommissionVariable($value->iSaleCommissionVariable);
        $campaignCommissionProduct->setGuaranteedCommissionLead($value->guaranteedCommissionLead);
        $campaignCommissionProduct->setGuaranteedCommissionSalesVariable($value->guaranteedCommissionSalesVariable);
        $campaignCommissionProduct->setGuaranteedCommissionSalesFixed($value->guaranteedCommissionSalesFixed);

        return $campaignCommissionProduct;
    }
}
