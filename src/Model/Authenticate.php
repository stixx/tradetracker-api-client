<?php

namespace Hypeit\TradeTracker\Model;

/**
 * Class Authenticate
 * @package Hypeit\TradeTracker\Model
 */
class Authenticate
{
    /**
     * @var int
     */
    private $customerId;

    /**
     * @var string
     */
    private $passphrase;

    /**
     * @var bool
     */
    private $sandbox;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var bool
     */
    private $demo;

    /**
     * Authenticate constructor.
     *
     * @param int    $customerId The customer id delivered by TradeTracker.
     * @param string $passphrase The passphrase delivered by TradeTracker.
     * @param bool   $sandbox    Whether to allow changes to been made.
     * @param string $locale     In what locale data the return values should be.
     * @param bool   $demo       Whether to show demo data instead of real.
     */
    public function __construct(int $customerId, string $passphrase, $sandbox = false, $locale = 'en_GB', $demo = false)
    {
        $this->customerId = $customerId;
        $this->passphrase = $passphrase;
        $this->sandbox = $sandbox;
        $this->locale = $locale;
        $this->demo = $demo;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     */
    public function setCustomerId(int $customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return string
     */
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }

    /**
     * @param string $passphrase
     */
    public function setPassphrase(string $passphrase)
    {
        $this->passphrase = $passphrase;
    }

    /**
     * @return bool
     */
    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    /**
     * @param bool $sandbox
     */
    public function setSandbox(bool $sandbox)
    {
        $this->sandbox = $sandbox;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return bool
     */
    public function isDemo(): bool
    {
        return $this->demo;
    }

    /**
     * @param bool $demo
     */
    public function setDemo(bool $demo)
    {
        $this->demo = $demo;
    }
}
