<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var \ORM\MainBundle\Entity\GdCities
     */
    private $fkcityid;

    /**
     * @var \ORM\MainBundle\Entity\GdCountries
     */
    private $fkcountryid;

    /**
     * @var \ORM\MainBundle\Entity\Person
     */
    private $fkpersonid;

    /**
     * @var \ORM\MainBundle\Entity\GdRegions
     */
    private $fkregionid;


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
     * Set street
     *
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
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

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set fkcityid
     *
     * @param \ORM\MainBundle\Entity\GdCities $fkcityid
     * @return Address
     */
    public function setFkcityid(\ORM\MainBundle\Entity\GdCities $fkcityid = null)
    {
        $this->fkcityid = $fkcityid;

        return $this;
    }

    /**
     * Get fkcityid
     *
     * @return \ORM\MainBundle\Entity\GdCities 
     */
    public function getFkcityid()
    {
        return $this->fkcityid;
    }

    /**
     * Set fkcountryid
     *
     * @param \ORM\MainBundle\Entity\GdCountries $fkcountryid
     * @return Address
     */
    public function setFkcountryid(\ORM\MainBundle\Entity\GdCountries $fkcountryid = null)
    {
        $this->fkcountryid = $fkcountryid;

        return $this;
    }

    /**
     * Get fkcountryid
     *
     * @return \ORM\MainBundle\Entity\GdCountries 
     */
    public function getFkcountryid()
    {
        return $this->fkcountryid;
    }

    /**
     * Set fkpersonid
     *
     * @param \ORM\MainBundle\Entity\Person $fkpersonid
     * @return Address
     */
    public function setFkpersonid(\ORM\MainBundle\Entity\Person $fkpersonid = null)
    {
        $this->fkpersonid = $fkpersonid;

        return $this;
    }

    /**
     * Get fkpersonid
     *
     * @return \ORM\MainBundle\Entity\Person 
     */
    public function getFkpersonid()
    {
        return $this->fkpersonid;
    }

    /**
     * Set fkregionid
     *
     * @param \ORM\MainBundle\Entity\GdRegions $fkregionid
     * @return Address
     */
    public function setFkregionid(\ORM\MainBundle\Entity\GdRegions $fkregionid = null)
    {
        $this->fkregionid = $fkregionid;

        return $this;
    }

    /**
     * Get fkregionid
     *
     * @return \ORM\MainBundle\Entity\GdRegions 
     */
    public function getFkregionid()
    {
        return $this->fkregionid;
    }
}
