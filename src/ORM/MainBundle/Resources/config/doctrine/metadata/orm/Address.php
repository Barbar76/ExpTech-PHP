<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address", indexes={@ORM\Index(name="fk_person_id", columns={"FKPersonId"}), @ORM\Index(name="fk_country_id", columns={"FKCountryId"}), @ORM\Index(name="fk_city_id", columns={"FKCityId"}), @ORM\Index(name="fk_region_id", columns={"FKRegionId"})})
 * @ORM\Entity
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


}
