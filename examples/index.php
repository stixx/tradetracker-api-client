<?php

use Hypeit\TradeTracker\Client\TradeTrackerClient;
use Hypeit\TradeTracker\Filter\AffiliateSiteFilter;
use Hypeit\TradeTracker\Model\Authenticate;

require_once __DIR__ . '/../vendor/autoload.php';

// Setup credentials
$authenticate = new Authenticate(
    12345, // The customer id
    'passphrase', // The passphrase
    true, // Whether to not allow changes
    'nl_NL', // The locale to be used for results.
    false // Whether to receive demo results.
);

// Initialize filter (optional)
$filter = new AffiliateSiteFilter();
$filter->setLimit(5);

try {
    // Create the api client
    $client         = new TradeTrackerClient('http://ws.tradetracker.com/soap/affiliate?wsdl', $authenticate);

    // Initiate the call
    $affiliateSites = $client->getAffiliateSites($filter);
} catch (\Exception $exception) {
    // Do something...
}
