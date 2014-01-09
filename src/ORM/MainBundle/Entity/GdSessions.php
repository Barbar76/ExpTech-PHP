<?php

namespace ORM\MainBundle\Entity;

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



    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionData
     *
     * @param string $sessionData
     * @return GdSessions
     */
    public function setSessionData($sessionData)
    {
        $this->sessionData = $sessionData;

        return $this;
    }

    /**
     * Get sessionData
     *
     * @return string 
     */
    public function getSessionData()
    {
        return $this->sessionData;
    }

    /**
     * Set expires
     *
     * @param integer $expires
     * @return GdSessions
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * Get expires
     *
     * @return integer 
     */
    public function getExpires()
    {
        return $this->expires;
    }
}
