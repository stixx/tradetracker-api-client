<?php

namespace Hypeit\TradeTracker\Model;

class ConversionTransaction
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Campaign
     */
    private $campaign;

    /**
     * @var CampaignProduct
     */
    private $campaignProduct;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var TransactionType
     */
    private $transactionType;

    /**
     * @var TransactionStatus
     */
    private $transactionStatus;

    /**
     * @var int
     */
    private $numTouchPointsTotal;

    /**
     * @var int
     */
    private $numTouchPointsAttributed;

    /**
     * @var float
     */
    private $attributableCommission;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var float
     */
    private $commission;

    /**
     * @var float
     */
    private $orderAmount;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \DateTime
     */
    private $registrationDate;

    /**
     * @var \DateTime
     */
    private $assessmentDate;

    /**
     * @var \DateInterval
     */
    private $clickToConversion;

    /**
     * @var \DateTime
     */
    private $originatingClickDate;

    /**
     * @var TransactionRejectionReason
     */
    private $rejectionReason;

    /**
     * @var bool
     */
    private $paidOut;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var CampaignAttributionModel
     */
    private $attributionModel;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Campaign
     */
    public function getCampaign(): Campaign
    {
        return $this->campaign;
    }

    /**
     * @param Campaign $campaign
     */
    public function setCampaign(Campaign $campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @return CampaignProduct
     */
    public function getCampaignProduct(): CampaignProduct
    {
        return $this->campaignProduct;
    }

    /**
     * @param CampaignProduct $campaignProduct
     */
    public function setCampaignProduct(CampaignProduct $campaignProduct)
    {
        $this->campaignProduct = $campaignProduct;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return TransactionType
     */
    public function getTransactionType(): TransactionType
    {
        return $this->transactionType;
    }

    /**
     * @param TransactionType $transactionType
     */
    public function setTransactionType(TransactionType $transactionType)
    {
        $this->transactionType = $transactionType;
    }

    /**
     * @return TransactionStatus
     */
    public function getTransactionStatus(): TransactionStatus
    {
        return $this->transactionStatus;
    }

    /**
     * @param TransactionStatus $transactionStatus
     */
    public function setTransactionStatus(TransactionStatus $transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;
    }

    /**
     * @return int
     */
    public function getNumTouchPointsTotal()
    {
        return $this->numTouchPointsTotal;
    }

    /**
     * @param int $numTouchPointsTotal
     */
    public function setNumTouchPointsTotal($numTouchPointsTotal)
    {
        $this->numTouchPointsTotal = $numTouchPointsTotal;
    }

    /**
     * @return int
     */
    public function getNumTouchPointsAttributed()
    {
        return $this->numTouchPointsAttributed;
    }

    /**
     * @param int $numTouchPointsAttributed
     */
    public function setNumTouchPointsAttributed($numTouchPointsAttributed)
    {
        $this->numTouchPointsAttributed = $numTouchPointsAttributed;
    }

    /**
     * @return float
     */
    public function getAttributableCommission()
    {
        return $this->attributableCommission;
    }

    /**
     * @param float $attributableCommission
     */
    public function setAttributableCommission($attributableCommission)
    {
        $this->attributableCommission = $attributableCommission;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

    /**
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * @param float $orderAmount
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param \DateTime $registrationDate
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;
    }

    /**
     * @return \DateTime
     */
    public function getAssessmentDate()
    {
        return $this->assessmentDate;
    }

    /**
     * @param \DateTime $assessmentDate
     */
    public function setAssessmentDate($assessmentDate)
    {
        $this->assessmentDate = $assessmentDate;
    }

    /**
     * @return \DateInterval
     */
    public function getClickToConversion()
    {
        return $this->clickToConversion;
    }

    /**
     * @param \DateInterval $clickToConversion
     */
    public function setClickToConversion($clickToConversion)
    {
        $this->clickToConversion = $clickToConversion;
    }

    /**
     * @return \DateTime
     */
    public function getOriginatingClickDate()
    {
        return $this->originatingClickDate;
    }

    /**
     * @param \DateTime $originatingClickDate
     */
    public function setOriginatingClickDate($originatingClickDate)
    {
        $this->originatingClickDate = $originatingClickDate;
    }

    /**
     * @return TransactionRejectionReason
     */
    public function getRejectionReason(): TransactionRejectionReason
    {
        return $this->rejectionReason;
    }

    /**
     * @param TransactionRejectionReason $rejectionReason
     */
    public function setRejectionReason(TransactionRejectionReason $rejectionReason)
    {
        $this->rejectionReason = $rejectionReason;
    }

    /**
     * @return bool
     */
    public function isPaidOut()
    {
        return $this->paidOut;
    }

    /**
     * @param bool $paidOut
     */
    public function setPaidOut(bool $paidOut)
    {
        $this->paidOut = $paidOut;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return CampaignAttributionModel
     */
    public function getAttributionModel(): CampaignAttributionModel
    {
        return $this->attributionModel;
    }

    /**
     * @param CampaignAttributionModel $attributionModel
     */
    public function setAttributionModel(CampaignAttributionModel $attributionModel)
    {
        $this->attributionModel = $attributionModel;
    }
}
