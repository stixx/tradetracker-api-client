<?php

namespace Hypeit\TradeTracker\Model;

class TransactionRejectionReason
{
    const RETURNED_GOODS = 'returned_goods';
    const OUT_OF_STOCK = 'out_of_stock';
    const PAYMENT_NOT_RECEIVED = 'payment_not_received';
    const INVALID_TRANSACTION = 'invalid_transaction';
    const ORDER_CANCELED = 'order_canceled';
    const DUPLICATE_ORDER = 'duplicate_order';
    const TEST_TRANSACTION = 'test_transaction';
    const ATTRIBUTED_TO_OTHER_CHANNEL = 'attributed_to_other_channel';
    const VIOLATES_CAMPAIGN_TERMS = 'violates_campaign_terms';
    const INVALID_CUSTOMER_DETAILS = 'invalid_customer_details';
    const CUSTOMER_UNREACHABLE = 'customer_unreachable';

    /**
     * @var string
     */
    private $reason;

    /**
     * TransactionRejectionReason constructor.
     *
     * @param string|null $reason
     */
    public function __construct($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->reason;
    }
}
