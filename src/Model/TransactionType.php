<?php

namespace Hypeit\TradeTracker\Model;

class TransactionType
{
    const CLICK = 'click';
    const LEAD = 'lead';
    const SALE = 'sale';

    /**
     * @var null|string
     */
    private $type;

    /**
     * TransactionType constructor.
     *
     * @param string|null $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->type;
    }
}
