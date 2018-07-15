<?php

namespace Hypeit\TradeTracker\Model;

class CampaignCommissionExtended
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
     * @var CampaignCommissionProduct[]
     */
    private $products;

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
     * @return CampaignCommissionProduct[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param CampaignCommissionProduct[] $products
     */
    public function setProducts(array $products)
    {
        $this->products = $products;
    }
}
