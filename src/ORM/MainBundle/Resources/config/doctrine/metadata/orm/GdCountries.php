<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GdCountries
 *
 * @ORM\Table(name="gd_countries")
 * @ORM\Entity
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


}
