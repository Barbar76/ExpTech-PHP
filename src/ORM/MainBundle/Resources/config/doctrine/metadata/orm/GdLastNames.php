<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GdLastNames
 *
 * @ORM\Table(name="gd_last_names")
 * @ORM\Entity
 */
class GdLastNames
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
     * @ORM\Column(name="last_name", type="string", length=100, nullable=false)
     */
    private $lastName = '';


}
