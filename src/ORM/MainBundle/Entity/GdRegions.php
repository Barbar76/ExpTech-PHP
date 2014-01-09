<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdRegions
 */
class GdRegions
{
    /**
     * @var integer
     */
    private $regionId;

    /**
     * @var string
     */
    private $countrySlug;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $regionShort;

    /**
     * @var string
     */
    private $regionSlug;

    /**
     * @var integer
     */
    private $weight;


    /**
     * Get regionId
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Set countrySlug
     *
     * @param string $countrySlug
     * @return GdRegions
     */
    public function setCountrySlug($countrySlug)
    {
        $this->countrySlug = $countrySlug;

        return $this;
    }

    /**
     * Get countrySlug
     *
     * @return string 
     */
    public function getCountrySlug()
    {
        return $this->countrySlug;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return GdRegions
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set regionShort
     *
     * @param string $regionShort
     * @return GdRegions
     */
    public function setRegionShort($regionShort)
    {
        $this->regionShort = $regionShort;

        return $this;
    }

    /**
     * Get regionShort
     *
     * @return string 
     */
    public function getRegionShort()
    {
        return $this->regionShort;
    }

    /**
     * Set regionSlug
     *
     * @param string $regionSlug
     * @return GdRegions
     */
    public function setRegionSlug($regionSlug)
    {
        $this->regionSlug = $regionSlug;

        return $this;
    }

    /**
     * Get regionSlug
     *
     * @return string 
     */
    public function getRegionSlug()
    {
        return $this->regionSlug;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return GdRegions
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
