<?php

namespace Hypeit\TradeTracker\Model;

class TransactionStatus
{
    const PENDING = 'pending';
    const ACCEPTED = 'accepted';
    const REJECTED = 'rejected';

    /**
     * @var string
     */
    private $status;

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

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->status;
    }
}
