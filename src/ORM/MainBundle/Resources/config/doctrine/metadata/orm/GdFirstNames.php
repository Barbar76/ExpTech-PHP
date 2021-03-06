<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GdFirstNames
 *
 * @ORM\Table(name="gd_first_names")
 * @ORM\Entity
 */
class GdFirstNames
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
     * @ORM\Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName = '';

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", nullable=false)
     */
    private $gender = 'male';


}
