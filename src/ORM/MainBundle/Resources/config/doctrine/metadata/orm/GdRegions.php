<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GdRegions
 *
 * @ORM\Table(name="gd_regions")
 * @ORM\Entity
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


}
