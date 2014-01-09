<?php



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


}