<?php



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


}
