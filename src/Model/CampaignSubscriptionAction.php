<?php

namespace Hypeit\TradeTracker\Model;

class CampaignSubscriptionAction
{
    const SUBSCRIBE = 'subscribe';
    const UNSUBSCRIBE = 'unsubscribe';

    /**
     * @var string
     */
    private $status;

    /**
     * CampaignSubscriptionAction constructor.
     *
     * @param string $status
     */
    public function __construct($status = self::SUBSCRIBE)
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
