<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GdUserAccounts
 *
 * @ORM\Table(name="gd_user_accounts")
 * @ORM\Entity
 */
class GdUserAccounts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="account_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $accountId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=false)
     */
    private $lastUpdated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_logged_in", type="datetime", nullable=true)
     */
    private $lastLoggedIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expires", type="datetime", nullable=true)
     */
    private $dateExpires;

    /**
     * @var string
     *
     * @ORM\Column(name="account_type", type="string", nullable=false)
     */
    private $accountType;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="password_recovery_question", type="string", length=100, nullable=true)
     */
    private $passwordRecoveryQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="password_recovery_answer", type="string", length=100, nullable=true)
     */
    private $passwordRecoveryAnswer;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_rows_generated", type="integer", nullable=true)
     */
    private $numRowsGenerated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="max_records", type="integer", nullable=true)
     */
    private $maxRecords;


}
