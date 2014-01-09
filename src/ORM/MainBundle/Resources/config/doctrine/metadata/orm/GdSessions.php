<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GdSessions
 *
 * @ORM\Table(name="gd_sessions")
 * @ORM\Entity
 */
class GdSessions
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionId = '';

    /**
     * @var string
     *
     * @ORM\Column(name="session_data", type="text", nullable=false)
     */
    private $sessionData;

    /**
     * @var integer
     *
     * @ORM\Column(name="expires", type="integer", nullable=false)
     */
    private $expires = '0';


}
