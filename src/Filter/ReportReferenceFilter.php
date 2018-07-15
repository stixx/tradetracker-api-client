<?php

namespace Hypeit\TradeTracker\Filter;

class ReportReferenceFilter extends ReportCampaignFilter
{
    /**
     * @var string
     */
    protected $reference;

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
}
