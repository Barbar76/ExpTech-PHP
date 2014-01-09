<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdCities
 */
class GdCities
{
    /**
     * @var integer
     */
    private $cityId;

    /**
     * @var string
     */
    private $countrySlug;

    /**
     * @var string
     */
    private $regionSlug;

    /**
     * @var string
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
