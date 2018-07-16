# TradeTracker API client

A TradeTracker API client to communicate with the webservice and map results to real model objects.

[![Build Status](https://travis-ci.org/hypeit/tradetracker-api-client.svg?branch=master)](https://travis-ci.org/hypeit/tradetracker-api-client)
[![Total Downloads](https://poser.pugx.org/hypeit/tradetracker-api-client/downloads.svg)](https://packagist.org/packages/hypeit/tradetracker-api-client)
[![Latest Stable Version](https://poser.pugx.org/hypeit/tradetracker-api-client/v/stable.svg)](https://packagist.org/packages/hypeit/tradetracker-api-client)

## Installation

You can install the package via composer:
```bash
$ composer require hypeit/tradetracker-api-client
```

You must configure authentication in order to use the client.

```php
$authentication = new Authentication(
    12345, // The customer id
    'passphrase', // The passphrase
    true, // Whether to not allow changes (optional)
    'en_GB', // The locale to be used for results. (optional)
    false // Whether to receive demo results. (optional)
);
```

Then inject the wsdl and the authentication object into the client.

```php
$client = new TradeTrackerClient('http://ws.tradetracker.com/soap/affiliate?wsdl', $authenticate);
```

## Usage

Call a client method to initiate the api call:

```php
$affiliateSites = $client->getAffiliateSites();
```

Common methods are:
- getAffiliateSites
- getCampaigns
- getClickTransactions
- getConversionTransactions
- getTransactions
- getReportAffiliateSite
- getReportCampaign
- getFeeds
- getFeedProductCategories
- getFeedProducts

Some method calls can have an optional filter:

```php
$filter = new AffiliateSiteFilter();
$filter->setLimit(5);

$affiliateSites = $client->getAffiliateSites($filter);
```

## Testing

``` bash
$ composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.