<?php

namespace Hypeit\TradeTracker\Client;

use Hypeit\TradeTracker\Exception\AuthenticationException;
use Hypeit\TradeTracker\Filter;
use Hypeit\TradeTracker\Mapper;
use Hypeit\TradeTracker\Model;

/**
 * Class TradeTrackerClient
 * @package Hypeit\TradeTracker\Client
 */
class TradeTrackerClient
{
    /**
     * @var \SoapClient
     */
    private $client;

    /**
     * TradeTrackerClient constructor.
     *
     * @param string             $wsdl         The wsdl url of the service.
     * @param Model\Authenticate $authenticate The model used to authenticate.
     * @param array|null         $options      The options used for the client.
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
     * Returns the soap client used to make api calls.
     *
     * @return \SoapClient
     */
    public function getClient()
    {
        return $this->client;
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
            throw new AuthenticationException(
                sprintf('Failed to authenticate with message "%s".', $exception->getMessage())
            );
        }
    }

    /**
     * Executes the api method call.
     *
     * @param string                 $method    The api method to call.
     * @param Mapper\MapperInterface $mapper    The mapper required to map the values.
     * @param array                  $arguments The arguments used with the method call.
     *
     * @return array
     */
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
     * Returns a list of available affiliate sites linked to your account.
     *
     * @param Filter\AffiliateSiteFilter|null $filter To filter the results.
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
     * Returns a list of affiliate site types.
     *
     * @return Model\AffiliateSiteType[]
     */
    public function getAffiliateSiteTypes()
    {
        return $this->execute(__FUNCTION__, new Mapper\AffiliateSiteTypeMapper());
    }

    /**
     * Returns a list of affiliate site categories.
     *
     * @return Model\AffiliateSiteCategory[]
     */
    public function getAffiliateSiteCategories()
    {
        return $this->execute(__FUNCTION__, new Mapper\AffiliateSiteCategoryMapper());
    }

    /**
     * Returns a list of available campaigns for the given affiliate site.
     *
     * @param int                        $affiliateSiteId The affiliate site.
     * @param Filter\CampaignFilter|null $filter          To filter the results.
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
     * Returns the available campaign categories.
     *
     * @return Model\CampaignCategory[]
     */
    public function getCampaignCategories()
    {
        return $this->execute(__FUNCTION__, new Mapper\CampaignCategoryMapper());
    }

    /**
     * Returns a extended commission information for the given campaign.
     *
     * @param int $affiliateSiteId The affiliate site.
     * @param int $campaignId      The campaign.
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
     * Change the campaign subscription.
     *
     * @param int    $affiliateSiteId The affiliate site.
     * @param int    $campaignId      The campaign.
     * @param string $action          The subscription action
     *
     * @see CampaignSubscriptionAction
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
     * Return the campaign news items.
     *
     * @param Filter\CampaignNewsItemFilter|null $filter To filter the results.
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
     * Returns the click transactions for the affiliate site.
     *
     * @param int                           $affiliateSiteId The affiliate site.
     * @param Filter\ClickTransactionFilter $filter          To filter the results.
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
     * Returns the conversion transactions for the affiliate site.
     *
     * @param int                                     $affiliateSiteId The affiliate site.
     * @param Filter\ConversionTransactionFilter|null $filter          To filter the results.
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
     * Creates a conversion transaction for the affiliate site.
     * Permissions needed to execute this call.
     *
     * @param Model\TransactionType                    $transactionType The transaction type.
     * @param int                                      $affiliateSiteId The affiliate site.
     * @param Model\CreateConversionTransactionOptions $options         Transaction options.
     *
     * @return int
     */
    public function createConversionTransaction(
        Model\TransactionType $transactionType,
        int $affiliateSiteId,
        Model\CreateConversionTransactionOptions $options
    ) {
        return $this->client->createConversionTransaction($transactionType->getType(), $affiliateSiteId, $options);
    }

    /**
     * Returns a report for the given affiliate site.
     *
     * @param int                                   $affiliateSiteId The affiliate site.
     * @param Filter\ReportAffiliateSiteFilter|null $filter          To filter the results.
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
     * Returns a report for the given campaign.
     *
     * @param int                         $affiliateSiteId The affiliate site.
     * @param Filter\ReportCampaignFilter $filter          To filter the results.
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
     * Returns a report reference.
     *
     * @param int                          $affiliateSiteId The affiliate site.
     * @param Filter\ReportReferenceFilter $filter          To filter the results.
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
     * Returns the available feeds.
     *
     * @param int                    $affiliateSiteId The affiliate site.
     * @param Filter\FeedFilter|null $filter          To filter the results.
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

    /**
     * Returns the available feed categories.
     *
     * @param int $affiliateSiteId The affiliate site.
     * @param int $feedId          The feed id.
     *
     * @return Model\FeedCategory[]
     */
    public function getFeedProductCategories(int $affiliateSiteId, int $feedId)
    {
        return $this->execute(__FUNCTION__, new Mapper\FeedCategoryMapper(), [
            $affiliateSiteId,
            $feedId,
        ]);
    }

    /**
     * Returns the available feed products.
     *
     * @param int                           $affiliateSiteId The affiliate site.
     * @param Filter\FeedProductFilter|null $filter          To filter the results.
     *
     * @return Model\FeedProduct[]
     */
    public function getFeedProducts(int $affiliateSiteId, Filter\FeedProductFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new Mapper\FeedProductMapper(), [
            $affiliateSiteId,
            $filter,
        ]);
    }

    /**
     * Returns a list of payments linked to your account.
     *
     * @param Filter\PaymentFilter|null $filter To filter the results.
     *
     * @return Model\Payment[]
     */
    public function getPayments(Filter\PaymentFilter $filter = null)
    {
        return $this->execute(__FUNCTION__, new Mapper\PaymentMapper(), [
            $filter,
        ]);
    }

    /**
     * Returns a list of attributions per affiliate site.
     *
     * @param int $conversionTransactionId The conversion transaction id.
     *
     * @return Model\Attribution[]
     */
    public function getAttributions(int $conversionTransactionId)
    {
        return $this->execute(__FUNCTION__, new Mapper\AttributionMapper(), [
            $conversionTransactionId,
        ]);
    }

    /**
     * Returns a list of touch points.
     *
     * @param int $conversionTransactionId The conversion transaction id.
     *
     * @return Model\Touchpoint[]
     */
    public function getTouchpoints(int $conversionTransactionId)
    {
        return $this->execute(__FUNCTION__, new Mapper\TouchpointMapper(), [
            $conversionTransactionId,
        ]);
    }

    /**
     * Returns all transactions by account.
     *
     * @param \DateTime $startDate The start date of the transactions.
     * @param \DateTime $endDate   The end date of the transactions.
     * @param Model\AffiliateSite[] $affiliateSites Affiliate site array. Can be obtained with getAffiliateSites() method
     *
     * @return array
     */
    public function getTransactions(\DateTime $startDate, \DateTime $endDate, array $affiliateSites)
    {
        $data = [];

        $filter = new Filter\ConversionTransactionFilter();
        $filter->setRegistrationDateFrom($startDate->format('Y-m-d'));
        $filter->setRegistrationDateTo($endDate->format('Y-m-d'));

        foreach ($affiliateSites as $affiliateSite) {
            $data[$affiliateSite->getId()][] = $this->getConversionTransactions($affiliateSite->getId(), $filter);
        }

        return $data;
    }
}
