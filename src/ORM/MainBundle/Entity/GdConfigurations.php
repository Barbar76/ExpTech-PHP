<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdConfigurations
 */
class GdConfigurations
{
    /**
     * @var integer
     */
    private $configurationId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $lastUpdated;

    /**
     * @var integer
     */
    private $accountId;

    /**
     * @var string
     */
    private $configurationName;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $numRowsGenerated;


    /**
     * Get configurationId
     *
     * @return integer 
     */
    public function getConfigurationId()
    {
        return $this->configurationId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return GdConfigurations
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return GdConfigurations
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return GdConfigurations
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Get lastUpdated
     *
     * @return \DateTime 
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     * @return GdConfigurations
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer 
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set configurationName
     *
     * @param string $configurationName
     * @return GdConfigurations
     */
    public function setConfigurationName($configurationName)
    {
        $this->configurationName = $configurationName;

        return $this;
    }

    /**
     * Get configurationName
     *
     * @return string 
     */
    public function getConfigurationName()
    {
        return $this->configurationName;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return GdConfigurations
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set numRowsGenerated
     *
     * @param integer $numRowsGenerated
     * @return GdConfigurations
     */
    public function setNumRowsGenerated($numRowsGenerated)
    {
        $this->numRowsGenerated = $numRowsGenerated;

        return $this;
    }

    /**
     * Get numRowsGenerated
     *
     * @return integer 
     */
    public function getNumRowsGenerated()
    {
        return $this->numRowsGenerated;
    }
}
