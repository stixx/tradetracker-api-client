<?php

namespace Hypeit\TradeTracker\Model;

class Payment
{
    /**
     * @var string
     */
    private $invoiceNumber;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var float
     */
    private $subTotal;

    /**
     * @var float
     */
    private $VAT;

    /**
     * @var float
     */
    private $endTotal;

    /**
     * @var \DateTime
     */
    private $billDate;

    /**
     * @var \DateTime
     */
    private $payDate;

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param $invoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * @param $subTotal
     */
    public function setSubTotal($subTotal)
    {
        $this->subTotal = $subTotal;
    }

    /**
     * @return float
     */
    public function getVAT()
    {
        return $this->VAT;
    }

    /**
     * @param $VAT
     */
    public function setVAT($VAT)
    {
        $this->VAT = $VAT;
    }

    /**
     * @return float
     */
    public function getEndTotal()
    {
        return $this->endTotal;
    }

    /**
     * @param $endTotal
     */
    public function setEndTotal($endTotal)
    {
        $this->endTotal = $endTotal;
    }

    /**
     * @return \DateTime
     */
    public function getBillDate()
    {
        return $this->billDate;
    }

    /**
     * @param $billDate
     */
    public function setBillDate($billDate)
    {
        $this->billDate = $billDate;
    }

    /**
     * @return \DateTime
     */
    public function getPayDate()
    {
        return $this->payDate;
    }

    /**
     * @param $payDate
     */
    public function setPayDate($payDate)
    {
        $this->payDate = $payDate;
    }
}
