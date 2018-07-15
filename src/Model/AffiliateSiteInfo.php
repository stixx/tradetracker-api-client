<?php

namespace Hypeit\TradeTracker\Model;

class AffiliateSiteInfo
{
    /**
     * @var AffiliateSiteType
     */
    private $type;

    /**
     * @var AffiliateSiteCategory
     */
    private $category;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var AffiliateSiteStatus
     */
    private $status;

    /**
     * @return AffiliateSiteType
     */
    public function getType(): AffiliateSiteType
    {
        return $this->type;
    }

    /**
     * @param AffiliateSiteType $type
     */
    public function setType(AffiliateSiteType $type)
    {
        $this->type = $type;
    }

    /**
     * @return AffiliateSiteCategory
     */
    public function getCategory(): AffiliateSiteCategory
    {
        return $this->category;
    }

    /**
     * @param AffiliateSiteCategory $category
     */
    public function setCategory(AffiliateSiteCategory $category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return AffiliateSiteStatus
     */
    public function getStatus(): AffiliateSiteStatus
    {
        return $this->status;
    }

    /**
     * @param AffiliateSiteStatus $status
     */
    public function setStatus(AffiliateSiteStatus $status)
    {
        $this->status = $status;
    }
}
