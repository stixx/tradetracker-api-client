<?php

namespace Hypeit\TradeTracker\Model;

class ReportData
{
    /**
     * @var int
     */
    private $overallImpressionCount;

    /**
     * @var int
     */
    private $uniqueImpressionCount;

    /**
     * @var float
     */
    private $impressionCommission;

    /**
     * @var int
     */
    private $overallClickCount;

    /**
     * @var int
     */
    private $uniqueClickCount;

    /**
     * @var float
     */
    private $clickCommission;

    /**
     * @var int
     */
    private $leadCount;

    /**
     * @var float
     */
    private $leadCommission;

    /**
     * @var int
     */
    private $saleCount;

    /**
     * @var float
     */
    private $saleCommission;

    /**
     * @var float
     */
    private $fixedCommission;

    /**
     * @var float
     */
    private $CTR;

    /**
     * @var float
     */
    private $CLR;

    /**
     * @var float
     */
    private $CSR;

    /**
     * @var float
     */
    private $eCPM;

    /**
     * @var float
     */
    private $EPC;

    /**
     * @var float
     */
    private $totalCommission;

    /**
     * @return int
     */
    public function getOverallImpressionCount()
    {
        return $this->overallImpressionCount;
    }

    /**
     * @param int $overallImpressionCount
     */
    public function setOverallImpressionCount($overallImpressionCount)
    {
        $this->overallImpressionCount = $overallImpressionCount;
    }

    /**
     * @return int
     */
    public function getUniqueImpressionCount()
    {
        return $this->uniqueImpressionCount;
    }

    /**
     * @param int $uniqueImpressionCount
     */
    public function setUniqueImpressionCount($uniqueImpressionCount)
    {
        $this->uniqueImpressionCount = $uniqueImpressionCount;
    }

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
     * @return int
     */
    public function getOverallClickCount()
    {
        return $this->overallClickCount;
    }

    /**
     * @param int $overallClickCount
     */
    public function setOverallClickCount($overallClickCount)
    {
        $this->overallClickCount = $overallClickCount;
    }

    /**
     * @return int
     */
    public function getUniqueClickCount()
    {
        return $this->uniqueClickCount;
    }

    /**
     * @param int $uniqueClickCount
     */
    public function setUniqueClickCount($uniqueClickCount)
    {
        $this->uniqueClickCount = $uniqueClickCount;
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
     * @return int
     */
    public function getLeadCount()
    {
        return $this->leadCount;
    }

    /**
     * @param int $leadCount
     */
    public function setLeadCount($leadCount)
    {
        $this->leadCount = $leadCount;
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
     * @return int
     */
    public function getSaleCount()
    {
        return $this->saleCount;
    }

    /**
     * @param int $saleCount
     */
    public function setSaleCount($saleCount)
    {
        $this->saleCount = $saleCount;
    }

    /**
     * @return float
     */
    public function getSaleCommission()
    {
        return $this->saleCommission;
    }

    /**
     * @param float $saleCommission
     */
    public function setSaleCommission($saleCommission)
    {
        $this->saleCommission = $saleCommission;
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
    public function getCTR()
    {
        return $this->CTR;
    }

    /**
     * @param float $CTR
     */
    public function setCTR($CTR)
    {
        $this->CTR = $CTR;
    }

    /**
     * @return float
     */
    public function getCLR()
    {
        return $this->CLR;
    }

    /**
     * @param float $CLR
     */
    public function setCLR($CLR)
    {
        $this->CLR = $CLR;
    }

    /**
     * @return float
     */
    public function getCSR()
    {
        return $this->CSR;
    }

    /**
     * @param float $CSR
     */
    public function setCSR($CSR)
    {
        $this->CSR = $CSR;
    }

    /**
     * @return float
     */
    public function getECPM()
    {
        return $this->eCPM;
    }

    /**
     * @param float $eCPM
     */
    public function setECPM($eCPM)
    {
        $this->eCPM = $eCPM;
    }

    /**
     * @return float
     */
    public function getEPC()
    {
        return $this->EPC;
    }

    /**
     * @param float $EPC
     */
    public function setEPC($EPC)
    {
        $this->EPC = $EPC;
    }

    /**
     * @return float
     */
    public function getTotalCommission()
    {
        return $this->totalCommission;
    }

    /**
     * @param float $totalCommission
     */
    public function setTotalCommission($totalCommission)
    {
        $this->totalCommission = $totalCommission;
    }
}
