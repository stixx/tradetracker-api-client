<?php

namespace Hypeit\TradeTracker\Model;

class CampaignCommission
{
    /**
     * @var float
     */
    private $impressionCommission;

    /**
     * @var float
     */
    private $clickCommission;

    /**
     * @var float
     */
    private $fixedCommission;

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
     * @return float
     */
    public function getImpressionCommission()
    {
        return $this->impressionCommission;
    }

    /**
     * @param float $impressionCommission
     */
    public function setImpressionCommission($impressionCommission)
    {
        $this->impressionCommission = $impressionCommission;
    }

    /**
     * @return float
     */
    public function getClickCommission()
    {
        return $this->clickCommission;
    }

    /**
     * @param float $clickCommission
     */
    public function setClickCommission($clickCommission)
    {
        $this->clickCommission = $clickCommission;
    }

    /**
     * @return float
     */
    public function getFixedCommission()
    {
        return $this->fixedCommission;
    }

    /**
     * @param float $fixedCommission
     */
    public function setFixedCommission($fixedCommission)
    {
        $this->fixedCommission = $fixedCommission;
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
}
