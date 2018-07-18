<?php

namespace Hypeit\TradeTracker\Model;

class CampaignAssignmentStatus
{
    const NOT_SIGNED_UP = 'notsignedup';
    const PENDING = 'pending';
    const ACCEPTED = 'accepted';
    const REJECTED = 'rejected';
    const ON_HOLD = 'onhold';
    const SIGNED_OUT = 'signedout';

    /**
     * @var string
     */
    private $status;

    /**
     * CampaignAssignmentStatus constructor.
     *
     * @param string|null $status
     */
    public function __construct($status = null)
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
