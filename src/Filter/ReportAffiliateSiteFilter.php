<?php

namespace Hypeit\TradeTracker\Filter;

class ReportAffiliateSiteFilter
{
    /**
     * @var string
     */
    protected $dateFrom;

    /**
     * @var string
     */
    protected $dateTo;

    /**
     * @return string
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param string $dateFrom
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param string $dateTo
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
    }
}