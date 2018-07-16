<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignInfo;
use Hypeit\TradeTracker\Normalizer\IntervalNormalizer;

class CampaignInfoMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignInfo
     * @throws \Exception
     */
    public function hydrate($value)
    {
        $intervalNormalizer = new IntervalNormalizer();

        $campaignInfo = new CampaignInfo();
        $campaignInfo->setCategory((new CampaignCategoryMapper())->hydrate($value->category));

        if (null !== $value->subCategories) {
            $data = [];
            $campaignSubCategoryMapper = new CampaignSubCategoryMapper();

            foreach ($value->subCategories as $subCategory) {
                $data[] = $campaignSubCategoryMapper->hydrate($subCategory);
            }

            $campaignInfo->setSubCategories($data);
        }

        $campaignInfo->setCampaignDescription($value->campaignDescription);
        $campaignInfo->setShopDescription($value->shopDescription);
        $campaignInfo->setTargetGroup($value->targetGroup);
        $campaignInfo->setCharacteristics($value->characteristics);
        $campaignInfo->setImageUrl($value->imageURL);
        $campaignInfo->setTrackingUrl($value->trackingURL);
        $campaignInfo->setCommission((new CampaignCommissionMapper())->hydrate($value->commission));
        $campaignInfo->setAssignmentStatus((new CampaignAssignmentStatusMapper())->hydrate($value->assignmentStatus));
        $campaignInfo->setStartDate(new \DateTime($value->startDate));
        $campaignInfo->setStopDate(new \DateTime($value->stopDate));
        $campaignInfo->setClickToConversion($intervalNormalizer->normalize($value->clickToConversion));
        $campaignInfo->setPolicySearchEngineMarketingStatus(
            (new CampaignAffiliatePolicyStatusMapper())->hydrate($value->policySearchEngineMarketingStatus)
        );
        $campaignInfo->setPolicyEmailMarketingStatus(
            (new CampaignAffiliatePolicyStatusMapper())->hydrate($value->policyEmailMarketingStatus)
        );
        $campaignInfo->setPolicyCashbackStatus(
            (new CampaignAffiliatePolicyStatusMapper())->hydrate($value->policyCashbackStatus)
        );
        $campaignInfo->setPolicyDiscountCodeStatus(
            (new CampaignAffiliatePolicyStatusMapper())->hydrate($value->policyDiscountCodeStatus)
        );
        $campaignInfo->setDeeplinkingSupported($value->deeplinkingSupported);
        $campaignInfo->setReferencesSupported($value->referencesSupported);
        $campaignInfo->setLeadMaximumAssessmentInterval(
            $intervalNormalizer->normalize($value->leadMaximumAssessmentInterval)
        );
        $campaignInfo->setLeadAverageAssessmentInterval(
            $intervalNormalizer->normalize($value->leadAverageAssessmentInterval)
        );
        $campaignInfo->setSaleMaximumAssessmentInterval(
            $intervalNormalizer->normalize($value->saleMaximumAssessmentInterval)
        );
        $campaignInfo->setSaleAverageAssessmentInterval(
            $intervalNormalizer->normalize($value->saleAverageAssessmentInterval)
        );
        $campaignInfo->setAttributionModelLead(
            (new CampaignAttributionModelMapper())->hydrate($value->attributionModelLead)
        );
        $campaignInfo->setAttributionModelSales(
            (new CampaignAttributionModelMapper())->hydrate($value->attributionModelSales)
        );

        return $campaignInfo;
    }
}
