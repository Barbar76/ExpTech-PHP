<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address", indexes={@ORM\Index(name="fk_person_id", columns={"FKPersonId"}), @ORM\Index(name="fk_country_id", columns={"FKCountryId"}), @ORM\Index(name="fk_city_id", columns={"FKCityId"}), @ORM\Index(name="fk_region_id", columns={"FKRegionId"})})
 * @ORM\Entity(repositoryClass="ORM\MainBundle\Entity\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="Street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="PostCode", type="string", length=10, nullable=true)
     */
    private $postcode;

    /**
     * @var \GdCities
     *
     * @ORM\ManyToOne(targetEntity="GdCities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FKCityId", referencedColumnName="city_id")
     * })
     */
    private $fkcityid;

    /**
     * @var \GdCountries
     *
     * @ORM\ManyToOne(targetEntity="GdCountries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FKCountryId", referencedColumnName="id")
     * })
     */
    private $fkcountryid;

    /**
     * @var \Person
     *
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FKPersonId", referencedColumnName="id")
     * })
     */
    private $fkpersonid;

    /**
     * @var \GdRegions
     *
     * @ORM\ManyToOne(targetEntity="GdRegions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FKRegionId", referencedColumnName="region_id")
     * })
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
