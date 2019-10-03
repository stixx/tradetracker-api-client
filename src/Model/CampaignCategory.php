<?php

namespace Hypeit\TradeTracker\Model;

class CampaignCategory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var CampaignCategory[]
     */
    private $categories;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
     * @param CampaignCategory $category
     */
    public function addCategory(CampaignCategory $category)
    {
        $this->categories[] = $category;
    }

    /**
     * @return CampaignCategory[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param CampaignCategory[] $categories
     */
    public function setCategories(array $categories)
    {
        $this->categories = $categories;
    }
}
