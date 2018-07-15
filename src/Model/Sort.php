<?php

namespace Hypeit\TradeTracker\Model;

class Sort
{
    /**
     * @var string
     */
    protected $sort;

    /**
     * AffiliateSiteSort constructor.
     *
     * @param string|null $sort
     */
    public function __construct($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->sort;
    }
}
