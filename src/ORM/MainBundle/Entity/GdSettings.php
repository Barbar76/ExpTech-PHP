<?php

namespace ORM\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GdSettings
 *
 * @ORM\Table(name="gd_settings", uniqueConstraints={@ORM\UniqueConstraint(name="setting_name", columns={"setting_name"})})
 * @ORM\Entity
 */
class GdSettings
{
    /**
     * @var string
     *
     * @ORM\Column(name="setting_name", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $settingName;

    /**
     * @var string
     *
     * @ORM\Column(name="setting_value", type="text", nullable=false)
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
