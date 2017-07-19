<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValidationRequest
 *
 * @ORM\Table(name="validation_request")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\ValidationRequestRepository")
 */
class ValidationRequest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     * @ORM\Column(name="progress" ,type="integer")
     */
    private $progress;

    /**
     * @ORM\ManyToOne(targetEntity="Core\UserBundle\Entity\User")
     */
    private $validator;

    /**
     * @ORM\OneToOne(targetEntity="Webbook\MainBundle\Entity\Version",cascade={"remove"})
     * @ORM\JoinColumn(name="version_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $version;

    /**
     * ValidationRequest constructor.
     */
    public function __construct()
    {
        $this->progress=0;
        $this->date= new \DateTime();
        $this->token = sha1(rand(11111, 99999).date('d-m-Y').time());
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ValidationRequest
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * @return Version
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * @param mixed $validator
     */
    public function setValidator($validator)
    {
        $this->validator = $validator;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return mixed
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @param mixed $progress
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

}

