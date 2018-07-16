<?php

namespace Hypeit\TradeTracker\Test\Client;

use Hypeit\TradeTracker\Client\TradeTrackerClient;
use Hypeit\TradeTracker\Model\AffiliateSite;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Class TradeTrackerClientTest
 * @package Hypeit\TradeTracker\Test\Client
 */
class TradeTrackerClientTest extends TestCase
{
    /**
     * @var TradeTrackerClient|MockObject
     */
    private $client;

    /**
     * {@inheritdoc}
     */
    public function setup()
    {
        $this->client = $this->getMockBuilder(TradeTrackerClient::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * Mocked test for @see TradeTrackerClient::getAffiliateSites()
     */
    public function testGetAffiliateSites()
    {
        $this->client->expects($this->once())
            ->method('getAffiliateSites')
            ->willReturn([
               new AffiliateSite(),
            ]);

        $affiliateSites = $this->client->getAffiliateSites();
        $this->assertCount(1, $affiliateSites);
    }
}
