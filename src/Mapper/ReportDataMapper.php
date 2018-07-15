<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\ReportData;

class ReportDataMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return ReportData
     */
    public function hydrate($value)
    {
        $reportData = new ReportData();
        $reportData->setOverallImpressionCount($value->overallImpressionCount);
        $reportData->setUniqueImpressionCount($value->uniqueImpressionCount);
        $reportData->setImpressionCommission($value->impressionCommission);
        $reportData->setOverallClickCount($value->overallClickCount);
        $reportData->setUniqueClickCount($value->uniqueClickCount);
        $reportData->setClickCommission($value->clickCommission);
        $reportData->setLeadCount($value->leadCount);
        $reportData->setLeadCommission($value->leadCommission);
        $reportData->setSaleCount($value->saleCount);
        $reportData->setSaleCommission($value->saleCommission);
        $reportData->setFixedCommission($value->fixedCommission);
        $reportData->setCTR($value->CTR);
        $reportData->setCLR($value->CLR);
        $reportData->setCSR($value->CSR);
        $reportData->setECPM($value->eCPM);
        $reportData->setEPC($value->EPC);
        $reportData->setTotalCommission($value->totalCommission);

        return $reportData;
    }
}
