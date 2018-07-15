<?php

namespace Hypeit\TradeTracker\Model;

class ReportCampaign
{
    /**
     * @var Campaign
     */
    private $campaign;

    /**
     * @var ReportData
     */
    private $reportData;

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
