<?php

namespace Hypeit\TradeTracker\Model;

class FeedProduct
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $productCategoryName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $productUrl;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var FeedProductAdditional[]
     */
    private $additional;

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getProductCategoryName()
    {
        return $this->productCategoryName;
    }

    /**
     * @param $productCategoryName
     */
    public function setProductCategoryName($productCategoryName)
    {
        $this->productCategoryName = $productCategoryName;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getProductUrl()
    {
        return $this->productUrl;
    }

    /**
     * @param $productUrl
     */
    public function setProductUrl($productUrl)
    {
        $this->productUrl = $productUrl;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return FeedProductAdditional[]
     */
    public function getAdditional(): array
    {
        return $this->additional;
    }

    /**
     * @param FeedProductAdditional[] $additional
     */
    public function setAdditional(array $additional)
    {
        $this->additional = $additional;
    }
}
