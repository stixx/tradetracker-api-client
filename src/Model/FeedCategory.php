<?php

namespace Hypeit\TradeTracker\Model;

class FeedCategory
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $productCount;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @param int $productCount
     */
    public function setProductCount($productCount)
    {
        $this->productCount = $productCount;
    }
}
