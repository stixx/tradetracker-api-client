<?php

namespace Hypeit\TradeTracker\Client;

use Hypeit\TradeTracker\Exception\AuthenticationException;
use Hypeit\TradeTracker\Filter;
use Hypeit\TradeTracker\Mapper;
use Hypeit\TradeTracker\Model;

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
     * @param Model\Authenticate $authenticate
     * @param array|null   $options
     *
     * @throws AuthenticationException
     */
    public function __construct(string $wsdl, Model\Authenticate $authenticate, array $options = null)
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
     * @param Model\Authenticate $authenticate
     *
     * @throws AuthenticationException
     */
    private function connect(Model\Authenticate $authenticate)
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

    private function execute($method, Mapper\MapperInterface $mapper, array $arguments = array())
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
     * @param Filter\AffiliateSiteFilter|null $filter
     *
     * @return Model\AffiliateSite[]
     */
    public function getAffiliateSites(Filter\AffiliateSiteFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new Mapper\AffiliateSiteMapper(), [
            $filter,
        ]);
    }

    /**
     * @return Model\AffiliateSiteType[]
     */
    public function getAffiliateSiteTypes()
    {
        return $this->execute(__FUNCTION__, new Mapper\AffiliateSiteTypeMapper());
    }

    /**
     * @return Model\AffiliateSiteCategory[]
     */
    public function getAffiliateSiteCategories()
    {
        return $this->execute(__FUNCTION__, new Mapper\AffiliateSiteCategoryMapper());
    }

    /**
     * @param int                 $affiliateSiteId
     * @param Filter\CampaignFilter|null $filter
     *
     * @return Model\Campaign[]
     */
    public function getCampaigns(int $affiliateSiteId, Filter\CampaignFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new Mapper\CampaignMapper(), [
            $affiliateSiteId,
            $filter,
        ]);
    }

    /**
     * @return Model\CampaignCategory[]
     */
    public function getCampaignCategories()
    {
        return $this->execute(__FUNCTION__, new Mapper\CampaignCategoryMapper());
    }

    /**
     * @param int $affiliateSiteId
     * @param int $campaignId
     *
     * @return Model\CampaignCommissionExtended
     */
    public function getCampaignCommissionExtended(int $affiliateSiteId, int $campaignId)
    {
        $data = $this->execute(__FUNCTION__, new Mapper\CampaignCommissionExtendedMapper(), [
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
        string $action = Model\CampaignSubscriptionAction::SUBSCRIBE
    ) {
        $this->client->changeCampaignSubscription(
            $affiliateSiteId,
            $campaignId,
            new Model\CampaignSubscriptionAction($action)
        );
    }

    /**
     * @param Filter\CampaignNewsItemFilter|null $filter
     *
     * @return Model\CampaignNewsItem[]
     */
    public function getCampaignNewsItems(Filter\CampaignNewsItemFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new Mapper\CampaignNewsItemMapper(), [
            $filter,
        ]);
    }

    /**
     * @param int                    $affiliateSiteId
     * @param Filter\ClickTransactionFilter $filter
     *
     * @return Model\ClickTransaction[]
     */
    public function getClickTransactions(int $affiliateSiteId, Filter\ClickTransactionFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new Mapper\ClickTransactionMapper(), [
            $affiliateSiteId,
            $filter,
        ]);
    }

    /**
     * @param int                              $affiliateSiteId
     * @param Filter\ConversionTransactionFilter|null $filter
     *
     * @return Model\ConversionTransaction[]
     */
    public function getConversionTransactions(int $affiliateSiteId, Filter\ConversionTransactionFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new Mapper\ConversionTransactionMapper(), [
           $affiliateSiteId,
           $filter,
        ]);
    }

    /**
     * @param int                            $affiliateSiteId
     * @param Filter\ReportAffiliateSiteFilter|null $filter
     *
     * @return Model\ReportData
     */
    public function getReportAffiliateSite(int $affiliateSiteId, Filter\ReportAffiliateSiteFilter $filter = null)
    {
        $data = $this->execute(__FUNCTION__, new Mapper\ReportDataMapper(), [
            $affiliateSiteId,
            $filter,
        ]);

        return reset($data);
    }

    /**
     * @param int                  $affiliateSiteId
     * @param Filter\ReportCampaignFilter $filter
     *
     * @return Model\ReportCampaign
     */
    public function getReportCampaign(int $affiliateSiteId, Filter\ReportCampaignFilter $filter)
    {
        $data = $this->execute(__FUNCTION__, new Mapper\ReportCampaignMapper(), [
            $affiliateSiteId,
            $filter,
        ]);

        return reset($data);
    }

    /**
     * @param int                   $affiliateSiteId
     * @param Filter\ReportReferenceFilter $filter
     *
     * @return Model\ReportReference
     */
    public function getReportReference(int $affiliateSiteId, Filter\ReportReferenceFilter $filter)
    {
        $data = $this->execute(__FUNCTION__, new Mapper\ReportReferenceMapper(), [
            $affiliateSiteId,
            $filter
        ]);

        return reset($data);
    }

    /**
     * @param int             $affiliateSiteId
     * @param Filter\FeedFilter|null $filter
     *
     * @return Model\Feed[]
     */
    public function getFeeds(int $affiliateSiteId, Filter\FeedFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new Mapper\FeedMapper(), [
            $affiliateSiteId,
            $filter,
        ]);
    }
}