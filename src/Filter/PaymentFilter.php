<?php

namespace Hypeit\TradeTracker\Filter;

class PaymentFilter
{
    /**
     * @var string
     */
    private $billDateFrom;

    /**
     * @var string
     */
    private $billDateTo;

    /**
     * @return string
     */
    public function getBillDateFrom()
    {
        return $this->billDateFrom;
    }

    /**
     * @param string $billDateFrom
     */
    public function setBillDateFrom($billDateFrom)
    {
        $this->billDateFrom = $billDateFrom;
    }

    /**
     * @return string
     */
    public function getBillDateTo()
    {
        return $this->billDateTo;
    }

    /**
     * @param string $billDateTo
     */
    public function setBillDateTo($billDateTo)
    {
        $this->billDateTo = $billDateTo;
    }
}
