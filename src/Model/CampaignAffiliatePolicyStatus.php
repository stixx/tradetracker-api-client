<?php

namespace Hypeit\TradeTracker\Model;

class CampaignAffiliatePolicyStatus
{
    const ALLOWED = 'allowed';
    const LIMITED = 'limited';
    const DISALLOWED = 'disallowed';

    /**
     * @var string
     */
    private $status;

    /**
     * CampaignAffiliatePolicyStatus constructor.
     *
     * @param string|null $status
     */
    public function __construct($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
