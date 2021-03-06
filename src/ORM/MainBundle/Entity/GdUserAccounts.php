<?php

namespace ORM\MainBundle\Entity;

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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return GdUserAccounts
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
     * @return GdUserAccounts
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
     * Set lastLoggedIn
     *
     * @param \DateTime $lastLoggedIn
     * @return GdUserAccounts
     */
    public function setLastLoggedIn($lastLoggedIn)
    {
        $this->lastLoggedIn = $lastLoggedIn;

        return $this;
    }

    /**
     * Get lastLoggedIn
     *
     * @return \DateTime 
     */
    public function getLastLoggedIn()
    {
        return $this->lastLoggedIn;
    }

    /**
     * Set dateExpires
     *
     * @param \DateTime $dateExpires
     * @return GdUserAccounts
     */
    public function setDateExpires($dateExpires)
    {
        $this->dateExpires = $dateExpires;

        return $this;
    }

    /**
     * Get dateExpires
     *
     * @return \DateTime 
     */
    public function getDateExpires()
    {
        return $this->dateExpires;
    }

    /**
     * Set accountType
     *
     * @param string $accountType
     * @return GdUserAccounts
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return string 
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return GdUserAccounts
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return GdUserAccounts
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return GdUserAccounts
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return GdUserAccounts
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set passwordRecoveryQuestion
     *
     * @param string $passwordRecoveryQuestion
     * @return GdUserAccounts
     */
    public function setPasswordRecoveryQuestion($passwordRecoveryQuestion)
    {
        $this->passwordRecoveryQuestion = $passwordRecoveryQuestion;

        return $this;
    }

    /**
     * Get passwordRecoveryQuestion
     *
     * @return string 
     */
    public function getPasswordRecoveryQuestion()
    {
        return $this->passwordRecoveryQuestion;
    }

    /**
     * Set passwordRecoveryAnswer
     *
     * @param string $passwordRecoveryAnswer
     * @return GdUserAccounts
     */
    public function setPasswordRecoveryAnswer($passwordRecoveryAnswer)
    {
        $this->passwordRecoveryAnswer = $passwordRecoveryAnswer;

        return $this;
    }

    /**
     * Get passwordRecoveryAnswer
     *
     * @return string 
     */
    public function getPasswordRecoveryAnswer()
    {
        return $this->passwordRecoveryAnswer;
    }

    /**
     * Set numRowsGenerated
     *
     * @param integer $numRowsGenerated
     * @return GdUserAccounts
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

    /**
     * Set maxRecords
     *
     * @param integer $maxRecords
     * @return GdUserAccounts
     */
    public function setMaxRecords($maxRecords)
    {
        $this->maxRecords = $maxRecords;

        return $this;
    }

    /**
     * Get maxRecords
     *
     * @return integer 
     */
    public function getMaxRecords()
    {
        return $this->maxRecords;
    }
}
