<?php

namespace Hypeit\TradeTracker\Client;

use Hypeit\TradeTracker\Exception\AuthenticationException;
use Hypeit\TradeTracker\Filter\AffiliateSiteFilter;
use Hypeit\TradeTracker\Filter\CampaignFilter;
use Hypeit\TradeTracker\Filter\CampaignNewsItemFilter;
use Hypeit\TradeTracker\Filter\ClickTransactionFilter;
use Hypeit\TradeTracker\Filter\ConversionTransactionFilter;
use Hypeit\TradeTracker\Filter\FeedFilter;
use Hypeit\TradeTracker\Filter\ReportAffiliateSiteFilter;
use Hypeit\TradeTracker\Filter\ReportCampaignFilter;
use Hypeit\TradeTracker\Filter\ReportReferenceFilter;
use Hypeit\TradeTracker\Mapper\AffiliateSiteCategoryMapper;
use Hypeit\TradeTracker\Mapper\AffiliateSiteTypeMapper;
use Hypeit\TradeTracker\Mapper\CampaignCategoryMapper;
use Hypeit\TradeTracker\Mapper\CampaignCommissionExtendedMapper;
use Hypeit\TradeTracker\Mapper\CampaignMapper;
use Hypeit\TradeTracker\Mapper\CampaignNewsItemMapper;
use Hypeit\TradeTracker\Mapper\ClickTransactionMapper;
use Hypeit\TradeTracker\Mapper\ConversionTransactionMapper;
use Hypeit\TradeTracker\Mapper\FeedMapper;
use Hypeit\TradeTracker\Mapper\MapperInterface;
use Hypeit\TradeTracker\Mapper\AffiliateSiteMapper;
use Hypeit\TradeTracker\Mapper\ReportCampaignMapper;
use Hypeit\TradeTracker\Mapper\ReportDataMapper;
use Hypeit\TradeTracker\Mapper\ReportReferenceMapper;
use Hypeit\TradeTracker\Model\AffiliateSite;
use Hypeit\TradeTracker\Model\AffiliateSiteCategory;
use Hypeit\TradeTracker\Model\AffiliateSiteType;
use Hypeit\TradeTracker\Model\Authenticate;
use Hypeit\TradeTracker\Model\Campaign;
use Hypeit\TradeTracker\Model\CampaignCategory;
use Hypeit\TradeTracker\Model\CampaignCommissionExtended;
use Hypeit\TradeTracker\Model\CampaignNewsItem;
use Hypeit\TradeTracker\Model\CampaignSubscriptionAction;
use Hypeit\TradeTracker\Model\ClickTransaction;
use Hypeit\TradeTracker\Model\ConversionTransaction;
use Hypeit\TradeTracker\Model\Feed;
use Hypeit\TradeTracker\Model\ReportCampaign;
use Hypeit\TradeTracker\Model\ReportData;
use Hypeit\TradeTracker\Model\ReportReference;

class TradeTrackerClient
{
    /**
     * @var \SoapClient
     */
    private $client;

    /**
     * TradeTrackerClient constructor.
     *
     * @param string       $wsdl
     * @param Authenticate $authenticate
     * @param array|null   $options
     *
     * @throws AuthenticationException
     */
    public function __construct(string $wsdl, Authenticate $authenticate, array $options = null)
    {
        if (null === $options) {
            $options = array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP);
        }

        $this->client = new \SoapClient($wsdl, $options);
        $this->connect($authenticate);
    }

    /**
     * Connect and authenticate to initialize the client.
     *
     * @param Authenticate $authenticate
     *
     * @throws AuthenticationException
     */
    private function connect(Authenticate $authenticate)
    {
        try {
            $this->client->authenticate(
                $authenticate->getCustomerId(),
                $authenticate->getPassphrase(),
                $authenticate->isSandbox(),
                $authenticate->getLocale(),
                $authenticate->isDemo()
            );
        } catch (\Exception $exception) {
            throw new AuthenticationException('Failed to authenticate.');
        }
    }

    private function execute($method, MapperInterface $mapper, array $arguments = array())
    {
        $data = [];
        $items = call_user_func_array(array($this->client, $method), $arguments);

        if (!is_array($items)) {
            $items = array($items);
        }

        foreach ($items as $value) {
            $data[] = $mapper->hydrate($value);
        }

        return $data;
    }

    /**
     * @param AffiliateSiteFilter|null $filter
     *
     * @return AffiliateSite[]
     */
    public function getAffiliateSites(AffiliateSiteFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new AffiliateSiteMapper(), [
            $filter,
        ]);
    }

    /**
     * @return AffiliateSiteType[]
     */
    public function getAffiliateSiteTypes()
    {
        return $this->execute(__FUNCTION__, new AffiliateSiteTypeMapper());
    }

    /**
     * @return AffiliateSiteCategory[]
     */
    public function getAffiliateSiteCategories()
    {
        return $this->execute(__FUNCTION__, new AffiliateSiteCategoryMapper());
    }

    /**
     * @param int                 $affiliateSiteId
     * @param CampaignFilter|null $filter
     *
     * @return Campaign[]
     */
    public function getCampaigns(int $affiliateSiteId, CampaignFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new CampaignMapper(), [
            $affiliateSiteId,
            $filter,
        ]);
    }

    /**
     * @return CampaignCategory[]
     */
    public function getCampaignCategories()
    {
        return $this->execute(__FUNCTION__, new CampaignCategoryMapper());
    }

    /**
     * @param int $affiliateSiteId
     * @param int $campaignId
     *
     * @return CampaignCommissionExtended
     */
    public function getCampaignCommissionExtended(int $affiliateSiteId, int $campaignId)
    {
        $data = $this->execute(__FUNCTION__, new CampaignCommissionExtendedMapper(), [
            $affiliateSiteId,
            $campaignId,
        ]);

        return reset($data);
    }

    /**
     * @param int    $affiliateSiteId
     * @param int    $campaignId
     * @param string $action
     *
     * @return void
     */
    public function changeCampaignSubscription(
        int $affiliateSiteId,
        int $campaignId,
        string $action = CampaignSubscriptionAction::SUBSCRIBE
    ) {
        $this->client->changeCampaignSubscription(
            $affiliateSiteId,
            $campaignId,
            new CampaignSubscriptionAction($action)
        );
    }

    /**
     * @param CampaignNewsItemFilter|null $filter
     *
     * @return CampaignNewsItem[]
     */
    public function getCampaignNewsItems(CampaignNewsItemFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new CampaignNewsItemMapper(), [
            $filter,
        ]);
    }

    /**
     * @param int                    $affiliateSiteId
     * @param ClickTransactionFilter $filter
     *
     * @return ClickTransaction[]
     */
    public function getClickTransactions(int $affiliateSiteId, ClickTransactionFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new ClickTransactionMapper(), [
            $affiliateSiteId,
            $filter,
        ]);
    }

    /**
     * @param int                              $affiliateSiteId
     * @param ConversionTransactionFilter|null $filter
     *
     * @return ConversionTransaction[]
     */
    public function getConversionTransactions(int $affiliateSiteId, ConversionTransactionFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new ConversionTransactionMapper(), [
           $affiliateSiteId,
           $filter,
        ]);
    }

    /**
     * @param int                            $affiliateSiteId
     * @param ReportAffiliateSiteFilter|null $filter
     *
     * @return ReportData
     */
    public function getReportAffiliateSite(int $affiliateSiteId, ReportAffiliateSiteFilter $filter = null)
    {
        $data = $this->execute(__FUNCTION__, new ReportDataMapper(), [
            $affiliateSiteId,
            $filter,
        ]);

        return reset($data);
    }

    /**
     * @param int                  $affiliateSiteId
     * @param ReportCampaignFilter $filter
     *
     * @return ReportCampaign
     */
    public function getReportCampaign(int $affiliateSiteId, ReportCampaignFilter $filter)
    {
        $data = $this->execute(__FUNCTION__, new ReportCampaignMapper(), [
            $affiliateSiteId,
            $filter,
        ]);

        return reset($data);
    }

    /**
     * @param int                   $affiliateSiteId
     * @param ReportReferenceFilter $filter
     *
     * @return ReportReference
     */
    public function getReportReference(int $affiliateSiteId, ReportReferenceFilter $filter)
    {
        $data = $this->execute(__FUNCTION__, new ReportReferenceMapper(), [
            $affiliateSiteId,
            $filter
        ]);

        return reset($data);
    }

    /**
     * @param int             $affiliateSiteId
     * @param FeedFilter|null $filter
     *
     * @return Feed[]
     */
    public function getFeeds(int $affiliateSiteId, FeedFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new FeedMapper(), [
            $affiliateSiteId,
            $filter,
        ]);
    }
}