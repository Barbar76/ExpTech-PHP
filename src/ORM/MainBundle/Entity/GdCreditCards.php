<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdCreditCards
 */
class GdCreditCards
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $typeCode;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @var integer
     */
    private $numberLength;

    /**
     * @var float
     */
    private $weight;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typeCode
     *
     * @param string $typeCode
     * @return GdCreditCards
     */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Get typeCode
     *
     * @return string 
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return GdCreditCards
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set prefix
     *
     * @param string $prefix
     * @return GdCreditCards
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }

    /**
     * Get prefix
     *
     * @return string 
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set numberLength
     *
     * @param integer $numberLength
     * @return GdCreditCards
     */
    public function setNumberLength($numberLength)
    {
        $this->numberLength = $numberLength;

        return $this;
    }

    /**
     * Get numberLength
     *
     * @return integer 
     */
    public function getNumberLength()
    {
        return $this->numberLength;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return GdCreditCards
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
