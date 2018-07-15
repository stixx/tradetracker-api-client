<?php

namespace Hypeit\TradeTracker\Normalizer;

class IntervalNormalizer implements NormalizerInterface
{
    /**
     * {@inheritdoc}
     * @throws \Exception
     */
    public function normalize($value)
    {
        if (empty($value)) {
            return null;
        }

        if (strpos($value, 'T') !== false) {
            $value = explode('T', $value)[0];
        }

        if (strlen($value) < 2) {
            return null;
        }

        return new \DateInterval($value);
    }
}
