<?php

namespace Hypeit\TradeTracker\Normalizer;

interface NormalizerInterface
{
    /**
     * Normalizes the given value.
     *
     * @param mixed $value The value given.
     *
     * @return mixed
     */
    public function normalize($value);
}
