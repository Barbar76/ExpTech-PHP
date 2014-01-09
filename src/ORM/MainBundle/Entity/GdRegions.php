<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdRegions
 *
 * @ORM\Table(name="gd_regions")
 * @ORM\Entity(repositoryClass="ORM\MainBundle\Entity\GdRegionsRepository")
 */
class GdRegions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="region_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regionId;

    /**
     * @var string
     *
     * @ORM\Column(name="country_slug", type="string", length=100, nullable=false)
     */
    private $countrySlug;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=35, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="region_short", type="string", length=2, nullable=true)
     */
    private $regionShort;

    /**
     * @var string
     *
     * @ORM\Column(name="region_slug", type="string", length=100, nullable=false)
     */
    private $regionSlug;

    /**
     * @var integer
     *
     * @ORM\Column(name="weight", type="smallint", nullable=false)
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
