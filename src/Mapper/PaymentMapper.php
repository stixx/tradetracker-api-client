<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\Payment;

class PaymentMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return Payment
     */
    public function hydrate($value)
    {
        $payment = new Payment();
        $payment->setInvoiceNumber($value->invoiceNumber);
        $payment->setCurrency($value->currency);
        $payment->setSubTotal($value->subTotal);
        $payment->setVAT($value->VAT);
        $payment->setEndTotal($value->endTotal);
        $payment->setBillDate(new \DateTime($value->billDate));
        $payment->setPayDate(new \DateTime($value->payDate));

        return $payment;
    }
}
