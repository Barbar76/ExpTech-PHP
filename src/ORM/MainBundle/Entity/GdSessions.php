<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdSessions
 */
class GdSessions
{
    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var string
     */
    private $sessionData;

    /**
     * @var integer
     */
    private $expires;


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
