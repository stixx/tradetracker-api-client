<?php

namespace Hypeit\TradeTracker\Test\Normalizer;

use Hypeit\TradeTracker\Normalizer\IntervalNormalizer;
use PHPUnit\Framework\TestCase;

/**
 * Class IntervalNormalizerTest
 * @package Hypeit\TradeTracker\Test\Normalizer
 */
class IntervalNormalizerTest extends TestCase
{
    /**
     * Test if the normalizer works properly.
     *
     * @param mixed $value
     * @param mixed $expected
     *
     * @dataProvider intervalProvider
     */
    public function testNormalize($value, $expected)
    {
        $normalizer = new IntervalNormalizer();
        $result = $normalizer->normalize($value);

        if (is_object($result)) {
            $result = get_class($result);
        }

        $this->assertEquals($expected, $result);
    }

    /**
     * Test that the normalizer throws an exception.
     *
     * @throws \Exception
     */
    public function testNormalizeWithException()
    {
        $this->expectException(\Exception::class);
        $normalizer = new IntervalNormalizer();
        $normalizer->normalize('P15D1M');
    }

    /**
     * Data provider for @see testNormalize
     */
    public function intervalProvider()
    {
        return [
            ['P1D', \DateInterval::class],
            ['P15M1DT202010', \DateInterval::class],
            ['', null],
            [null, null],
        ];
    }
}
