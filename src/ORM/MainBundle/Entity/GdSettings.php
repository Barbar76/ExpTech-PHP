<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdSettings
 */
class GdSettings
{
    /**
     * @var string
     */
    private $settingName;

    /**
     * @var string
     */
    private $settingValue;


    /**
     * Get settingName
     *
     * @return string 
     */
    public function getSettingName()
    {
        return $this->settingName;
    }

    /**
     * Set settingValue
     *
     * @param string $settingValue
     * @return GdSettings
     */
    public function setSettingValue($settingValue)
    {
        $this->settingValue = $settingValue;

        return $this;
    }

    /**
     * Get settingValue
     *
     * @return string 
     */
    public function getSettingValue()
    {
        return $this->settingValue;
    }
}
