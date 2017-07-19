<?php

namespace Webbook\MainBundle\Entity;

use Core\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

use Knp\DoctrineBehaviors\Model as ORMBehaviors;
/**
 * Version
 *
 * @ORM\Table(name="version")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\VersionRepository")
 */
class Version
{
    use ORMBehaviors\Timestampable\Timestampable;
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
     * @ORM\ManyToOne(targetEntity="Core\UserBundle\Entity\User")
     */
    private $createdBy;

    /**
     * @var double
     * @ORM\Column(name="version_number",type="float")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="content",type="text" ,nullable=true)
     */
    private $content;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\Media" , mappedBy="version", cascade={"remove","persist","refresh"}, orphanRemoval=true)
     */
    private $media;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\BookBlock", inversedBy="versions")
     */
    private $bookBlock;

    /**
     * @var int
     * @ORM\Column(name="status", type="integer",options={"comment":"0=>edition 1=>validation 2=>validated 3=> published"} )
     */
    private $status;

    /**
     * @var int
     * @ORM\Column(name="progress" ,type="integer")
     */
    private $progress;

    /**
     * Version constructor.
     */
    public function __construct(){
        // status 0 mean  during edition
        $this->number=1.00;
        $this->status=0;
        $this->progress=0;
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
     * Set token
     *
     * @param string $token
     *
     * @return Version
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

	public function __toString(){
		return $this->token;
	}


    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param float $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param User $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }


    /**
     * @return BookBlock
     */
    public function getBookBlock()
    {
        return $this->bookBlock;
    }

    /**
     * @param mixed $bookBlock
     */
    public function setBookBlock($bookBlock)
    {
        $this->bookBlock = $bookBlock;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
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

    /**
     * @return mixed
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param mixed $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

}

