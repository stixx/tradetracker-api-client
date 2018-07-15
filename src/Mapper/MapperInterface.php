<?php

namespace Hypeit\TradeTracker\Mapper;

interface MapperInterface
{
    /**
     * Hydrates the value and maps it to an object.
     *
     * @param mixed $value
     *
     * @return object
     */
    public function hydrate($value);
}
