<?php

namespace Hypeit\TradeTracker\Model;

class CampaignInfo
{
    /**
     * @var CampaignCategory
     */
    private $category;

    /**
     * @var CampaignSubCategory[]
     */
    private $subCategories;

    /**
     * @var string
     */
    private $campaignDescription;

    /**
     * @var string
     */
    private $shopDescription;

    /**
     * @var string
     */
    private $targetGroup;

    /**
     * @var string
     */
    private $characteristics;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var string
     */
    private $trackingUrl;

    /**
     * @var CampaignCommission
     */
    private $commission;

    /**
     * @var CampaignAssignmentStatus
     */
    private $assignmentStatus;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $stopDate;

    /**
     * @var \DateInterval
     */
    private $clickToConversion;

    /**
     * @var CampaignAffiliatePolicyStatus
     */
    private $policySearchEngineMarketingStatus;

    /**
     * @var CampaignAffiliatePolicyStatus
     */
    private $policyEmailMarketingStatus;

    /**
     * @var CampaignAffiliatePolicyStatus
     */
    private $policyCashbackStatus;

    /**
     * @var CampaignAffiliatePolicyStatus
     */
    private $policyDiscountCodeStatus;

    /**
     * @var bool
     */
    private $deeplinkingSupported;

    /**
     * @var bool
     */
    private $referencesSupported;

    /**
     * @var \DateInterval
     */
    private $leadMaximumAssessmentInterval;

    /**
     * @var \DateInterval
     */
    private $leadAverageAssessmentInterval;

    /**
     * @var \DateInterval
     */
    private $saleMaximumAssessmentInterval;

    /**
     * @var \DateInterval
     */
    private $saleAverageAssessmentInterval;

    /**
     * @var CampaignAttributionModel
     */
    private $attributionModelLead;

    /**
     * @var CampaignAttributionModel
     */
    private $attributionModelSales;

    /**
     * @return CampaignCategory
     */
    public function getCategory(): CampaignCategory
    {
        return $this->category;
    }

    /**
     * @param CampaignCategory $category
     */
    public function setCategory(CampaignCategory $category)
    {
        $this->category = $category;
    }

    /**
     * @return CampaignSubCategory[]
     */
    public function getSubCategories(): array
    {
        return $this->subCategories;
    }

    /**
     * @param CampaignSubCategory[] $subCategories
     */
    public function setSubCategories(array $subCategories)
    {
        $this->subCategories = $subCategories;
    }

    /**
     * @return string
     */
    public function getCampaignDescription()
    {
        return $this->campaignDescription;
    }

    /**
     * @param string $campaignDescription
     */
    public function setCampaignDescription($campaignDescription)
    {
        $this->campaignDescription = $campaignDescription;
    }

    /**
     * @return string
     */
    public function getShopDescription()
    {
        return $this->shopDescription;
    }

    /**
     * @param string $shopDescription
     */
    public function setShopDescription($shopDescription)
    {
        $this->shopDescription = $shopDescription;
    }

    /**
     * @return string
     */
    public function getTargetGroup()
    {
        return $this->targetGroup;
    }

    /**
     * @param string $targetGroup
     */
    public function setTargetGroup($targetGroup)
    {
        $this->targetGroup = $targetGroup;
    }

    /**
     * @return string
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * @param string $characteristics
     */
    public function setCharacteristics($characteristics)
    {
        $this->characteristics = $characteristics;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return CampaignCommission
     */
    public function getCommission(): CampaignCommission
    {
        return $this->commission;
    }

    /**
     * @param CampaignCommission $commission
     */
    public function setCommission(CampaignCommission $commission)
    {
        $this->commission = $commission;
    }

    /**
     * @return string
     */
    public function getAssignmentStatus()
    {
        return $this->assignmentStatus->getStatus();
    }

    /**
     * @param CampaignAssignmentStatus $assignmentStatus
     */
    public function setAssignmentStatus(CampaignAssignmentStatus $assignmentStatus)
    {
        $this->assignmentStatus = $assignmentStatus;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTime
     */
    public function getStopDate()
    {
        return $this->stopDate;
    }

    /**
     * @param \DateTime $stopDate
     */
    public function setStopDate($stopDate)
    {
        $this->stopDate = $stopDate;
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
     * @return CampaignAffiliatePolicyStatus
     */
    public function getPolicySearchEngineMarketingStatus(): CampaignAffiliatePolicyStatus
    {
        return $this->policySearchEngineMarketingStatus;
    }

    /**
     * @param CampaignAffiliatePolicyStatus $policySearchEngineMarketingStatus
     */
    public function setPolicySearchEngineMarketingStatus(
        CampaignAffiliatePolicyStatus $policySearchEngineMarketingStatus
    ) {
        $this->policySearchEngineMarketingStatus = $policySearchEngineMarketingStatus;
    }

    /**
     * @return CampaignAffiliatePolicyStatus
     */
    public function getPolicyEmailMarketingStatus(): CampaignAffiliatePolicyStatus
    {
        return $this->policyEmailMarketingStatus;
    }

    /**
     * @param CampaignAffiliatePolicyStatus $policyEmailMarketingStatus
     */
    public function setPolicyEmailMarketingStatus(CampaignAffiliatePolicyStatus $policyEmailMarketingStatus)
    {
        $this->policyEmailMarketingStatus = $policyEmailMarketingStatus;
    }

    /**
     * @return CampaignAffiliatePolicyStatus
     */
    public function getPolicyCashbackStatus(): CampaignAffiliatePolicyStatus
    {
        return $this->policyCashbackStatus;
    }

    /**
     * @param CampaignAffiliatePolicyStatus $policyCashbackStatus
     */
    public function setPolicyCashbackStatus(CampaignAffiliatePolicyStatus $policyCashbackStatus)
    {
        $this->policyCashbackStatus = $policyCashbackStatus;
    }

    /**
     * @return CampaignAffiliatePolicyStatus
     */
    public function getPolicyDiscountCodeStatus(): CampaignAffiliatePolicyStatus
    {
        return $this->policyDiscountCodeStatus;
    }

    /**
     * @param CampaignAffiliatePolicyStatus $policyDiscountCodeStatus
     */
    public function setPolicyDiscountCodeStatus(CampaignAffiliatePolicyStatus $policyDiscountCodeStatus)
    {
        $this->policyDiscountCodeStatus = $policyDiscountCodeStatus;
    }

    /**
     * @return bool
     */
    public function isDeeplinkingSupported()
    {
        return $this->deeplinkingSupported;
    }

    /**
     * @param bool $deeplinkingSupported
     */
    public function setDeeplinkingSupported(bool $deeplinkingSupported)
    {
        $this->deeplinkingSupported = $deeplinkingSupported;
    }

    /**
     * @return bool
     */
    public function isReferencesSupported()
    {
        return $this->referencesSupported;
    }

    /**
     * @param bool $referencesSupported
     */
    public function setReferencesSupported(bool $referencesSupported)
    {
        $this->referencesSupported = $referencesSupported;
    }

    /**
     * @return \DateInterval
     */
    public function getLeadMaximumAssessmentInterval()
    {
        return $this->leadMaximumAssessmentInterval;
    }

    /**
     * @param \DateInterval $leadMaximumAssessmentInterval
     */
    public function setLeadMaximumAssessmentInterval($leadMaximumAssessmentInterval)
    {
        $this->leadMaximumAssessmentInterval = $leadMaximumAssessmentInterval;
    }

    /**
     * @return \DateInterval
     */
    public function getLeadAverageAssessmentInterval()
    {
        return $this->leadAverageAssessmentInterval;
    }

    /**
     * @param \DateInterval $leadAverageAssessmentInterval
     */
    public function setLeadAverageAssessmentInterval($leadAverageAssessmentInterval)
    {
        $this->leadAverageAssessmentInterval = $leadAverageAssessmentInterval;
    }

    /**
     * @return \DateInterval
     */
    public function getSaleMaximumAssessmentInterval()
    {
        return $this->saleMaximumAssessmentInterval;
    }

    /**
     * @param \DateInterval $saleMaximumAssessmentInterval
     */
    public function setSaleMaximumAssessmentInterval($saleMaximumAssessmentInterval)
    {
        $this->saleMaximumAssessmentInterval = $saleMaximumAssessmentInterval;
    }

    /**
     * @return \DateInterval
     */
    public function getSaleAverageAssessmentInterval()
    {
        return $this->saleAverageAssessmentInterval;
    }

    /**
     * @param \DateInterval $saleAverageAssessmentInterval
     */
    public function setSaleAverageAssessmentInterval($saleAverageAssessmentInterval)
    {
        $this->saleAverageAssessmentInterval = $saleAverageAssessmentInterval;
    }

    /**
     * @return CampaignAttributionModel
     */
    public function getAttributionModelLead(): CampaignAttributionModel
    {
        return $this->attributionModelLead;
    }

    /**
     * @param CampaignAttributionModel $attributionModelLead
     */
    public function setAttributionModelLead(CampaignAttributionModel $attributionModelLead)
    {
        $this->attributionModelLead = $attributionModelLead;
    }

    /**
     * @return CampaignAttributionModel
     */
    public function getAttributionModelSales(): CampaignAttributionModel
    {
        return $this->attributionModelSales;
    }

    /**
     * @param CampaignAttributionModel $attributionModelSales
     */
    public function setAttributionModelSales(CampaignAttributionModel $attributionModelSales)
    {
        $this->attributionModelSales = $attributionModelSales;
    }
}
