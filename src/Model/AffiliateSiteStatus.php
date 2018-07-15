<?php

namespace Hypeit\TradeTracker\Model;

class AffiliateSiteStatus
{
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
