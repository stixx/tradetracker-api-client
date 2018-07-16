<?php

namespace Hypeit\TradeTracker\Model;

class Attribution
{
    /**
     * @var AttributedAffiliateSite[]
     */
    private $affiliateSites;

    /**
     * @return AttributedAffiliateSite[]
     */
    public function getAffiliateSites(): array
    {
        return $this->affiliateSites;
    }

    /**
     * @param AttributedAffiliateSite[] $affiliateSites
     */
    public function setAffiliateSites(array $affiliateSites)
    {
        $this->affiliateSites = $affiliateSites;
    }
}
