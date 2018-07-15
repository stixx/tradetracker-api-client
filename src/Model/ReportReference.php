<?php

namespace Hypeit\TradeTracker\Model;

class ReportReference
{
    /**
     * @var string
     */
    private $reference;

    /**
     * @var Campaign
     */
    private $campaign;

    /**
     * @var ReportData
     */
    private $reportData;

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return Campaign
     */
    public function getCampaign(): Campaign
    {
        return $this->campaign;
    }

    /**
     * @param Campaign $campaign
     */
    public function setCampaign(Campaign $campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @return ReportData
     */
    public function getReportData(): ReportData
    {
        return $this->reportData;
    }

    /**
     * @param ReportData $reportData
     */
    public function setReportData(ReportData $reportData)
    {
        $this->reportData = $reportData;
    }
}
