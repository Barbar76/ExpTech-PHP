<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GdCreditCards
 *
 * @ORM\Table(name="gd_credit_cards")
 * @ORM\Entity
 */
class GdCreditCards
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
     * @ORM\Column(name="type_code", type="string", length=2, nullable=false)
     */
    private $typeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="prefix", type="string", length=6, nullable=false)
     */
    private $prefix;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_length", type="integer", nullable=true)
     */
    private $numberLength;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight;


}
