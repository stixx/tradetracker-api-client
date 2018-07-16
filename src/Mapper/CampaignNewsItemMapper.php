<?php

namespace Hypeit\TradeTracker\Mapper;

use Hypeit\TradeTracker\Model\CampaignNewsItem;

class CampaignNewsItemMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignNewsItem
     * @throws \Exception
     */
    public function hydrate($value)
    {
        $campaignNewsItem = new CampaignNewsItem();
        $campaignNewsItem->setId($value->ID);
        $campaignNewsItem->setCampaign((new CampaignMapper())->hydrate($value->campaign));
        $campaignNewsItem->setCampaignNewsType((new CampaignNewsTypeMapper())->hydrate($value->campaignNewsType));
        $campaignNewsItem->setTitle($value->title);
        $campaignNewsItem->setContent($value->content);
        $campaignNewsItem->setPublishDate(new \DateTime($value->publishDate));
        $campaignNewsItem->setExpirationDate(new \DateTime($value->expirationDate));

        return $campaignNewsItem;
    }
}
