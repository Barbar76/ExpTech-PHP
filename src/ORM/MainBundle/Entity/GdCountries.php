<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdCountries
 *
 * @ORM\Table(name="gd_countries")
 * @ORM\Entity(repositoryClass="ORM\MainBundle\Entity\GdCountriesRepository")
 */
class GdCountries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=false)
     */
    private $country = '';

    /**
     * @var string
     *
     * @ORM\Column(name="country_slug", type="string", length=100, nullable=true)
     */
    private $countrySlug;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return GdCountries
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set countrySlug
     *
     * @param string $countrySlug
     * @return GdCountries
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
}
