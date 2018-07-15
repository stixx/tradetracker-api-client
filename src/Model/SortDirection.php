<?php

namespace Hypeit\TradeTracker\Model;

class SortDirection
{
    const ASCENDING = 'ascending';
    const DESCENDING = 'descending';

    /**
     * @var string
     */
    private $sort = 'ascending';

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
}
