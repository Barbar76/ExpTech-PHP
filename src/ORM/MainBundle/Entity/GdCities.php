<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdCities
 *
 * @ORM\Table(name="gd_cities")
 * @ORM\Entity
 */
class GdCities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cityId;

    /**
     * @var string
     *
     * @ORM\Column(name="country_slug", type="string", length=100, nullable=false)
     */
    private $countrySlug;

    /**
     * @var string
     *
     * @ORM\Column(name="region_slug", type="string", length=100, nullable=false)
     */
    private $regionSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=80, nullable=false)
     */
    private $city;



    /**
     * Get cityId
     *
     * @return integer 
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set countrySlug
     *
     * @param string $countrySlug
     * @return GdCities
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
     * Set regionSlug
     *
     * @param string $regionSlug
     * @return GdCities
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
     * Set city
     *
     * @param string $city
     * @return GdCities
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }
}
