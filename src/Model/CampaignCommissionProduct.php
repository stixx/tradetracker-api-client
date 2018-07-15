<?php

namespace Hypeit\TradeTracker\Model;

class CampaignCommissionProduct
{
    /**
     * @var CampaignProduct
     */
    private $campaignProduct;

    /**
     * @var float
     */
    private $leadCommission;

    /**
     * @var float
     */
    private $saleCommissionFixed;

    /**
     * @var float
     */
    private $saleCommissionVariable;

    /**
     * @var float
     */
    private $iLeadCommission;

    /**
     * @var float
     */
    private $iSaleCommissionFixed;

    /**
     * @var float
     */
    private $iSaleCommissionVariable;

    /**
     * @var float
     */
    private $guaranteedCommissionLead;

    /**
     * @var float
     */
    private $guaranteedCommissionSalesVariable;

    /**
     * @var float
     */
    private $guaranteedCommissionSalesFixed;

    /**
     * @return CampaignProduct
     */
    public function getCampaignProduct(): CampaignProduct
    {
        return $this->campaignProduct;
    }

    /**
     * @param CampaignProduct $campaignProduct
     */
    public function setCampaignProduct(CampaignProduct $campaignProduct)
    {
        $this->campaignProduct = $campaignProduct;
    }

    /**
     * @return float
     */
    public function getLeadCommission()
    {
        return $this->leadCommission;
    }

    /**
     * @param float $leadCommission
     */
    public function setLeadCommission($leadCommission)
    {
        $this->leadCommission = $leadCommission;
    }

    /**
     * @return float
     */
    public function getSaleCommissionFixed()
    {
        return $this->saleCommissionFixed;
    }

    /**
     * @param float $saleCommissionFixed
     */
    public function setSaleCommissionFixed($saleCommissionFixed)
    {
        $this->saleCommissionFixed = $saleCommissionFixed;
    }

    /**
     * @return float
     */
    public function getSaleCommissionVariable()
    {
        return $this->saleCommissionVariable;
    }

    /**
     * @param float $saleCommissionVariable
     */
    public function setSaleCommissionVariable($saleCommissionVariable)
    {
        $this->saleCommissionVariable = $saleCommissionVariable;
    }

    /**
     * @return float
     */
    public function getILeadCommission()
    {
        return $this->iLeadCommission;
    }

    /**
     * @param float $iLeadCommission
     */
    public function setILeadCommission($iLeadCommission)
    {
        $this->iLeadCommission = $iLeadCommission;
    }

    /**
     * @return float
     */
    public function getISaleCommissionFixed()
    {
        return $this->iSaleCommissionFixed;
    }

    /**
     * @param float $iSaleCommissionFixed
     */
    public function setISaleCommissionFixed($iSaleCommissionFixed)
    {
        $this->iSaleCommissionFixed = $iSaleCommissionFixed;
    }

    /**
     * @return float
     */
    public function getISaleCommissionVariable()
    {
        return $this->iSaleCommissionVariable;
    }

    /**
     * @param float $iSaleCommissionVariable
     */
    public function setISaleCommissionVariable($iSaleCommissionVariable)
    {
        $this->iSaleCommissionVariable = $iSaleCommissionVariable;
    }

    /**
     * @return float
     */
    public function getGuaranteedCommissionLead()
    {
        return $this->guaranteedCommissionLead;
    }

    /**
     * @param float $guaranteedCommissionLead
     */
    public function setGuaranteedCommissionLead($guaranteedCommissionLead)
    {
        $this->guaranteedCommissionLead = $guaranteedCommissionLead;
    }

    /**
     * @return float
     */
    public function getGuaranteedCommissionSalesVariable()
    {
        return $this->guaranteedCommissionSalesVariable;
    }

    /**
     * @param float $guaranteedCommissionSalesVariable
     */
    public function setGuaranteedCommissionSalesVariable($guaranteedCommissionSalesVariable)
    {
        $this->guaranteedCommissionSalesVariable = $guaranteedCommissionSalesVariable;
    }

    /**
     * @return float
     */
    public function getGuaranteedCommissionSalesFixed()
    {
        return $this->guaranteedCommissionSalesFixed;
    }

    /**
     * @param float $guaranteedCommissionSalesFixed
     */
    public function setGuaranteedCommissionSalesFixed($guaranteedCommissionSalesFixed)
    {
        $this->guaranteedCommissionSalesFixed = $guaranteedCommissionSalesFixed;
    }
}
