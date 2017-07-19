<?php

namespace Core\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Webbook\MainBundle\Entity\Subscription;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Core\UserBundle\Repository\UserRepository")
 * @ExclusionPolicy("all")
 */
class User extends BaseUser
{

    use ORMBehaviors\SoftDeletable\SoftDeletable;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="job_title" ,type="string",length=100,nullable=true)
     */
    private $jobTitle;

    /**
     * @ORM\OneToOne(targetEntity="Core\UserBundle\Entity\Profile", cascade={"persist","remove"})
     * @ORM\JoinColumn(name="profile_id",referencedColumnName="id")
     * @Expose
     */
    private $profile;


    /**
     * @var string
     * @ORM\Column(name="bibliography" ,type="text",nullable=true)
     * @Expose
     */
    private $bibliography;

    /**
     *
     * @ORM\ManyToMany(targetEntity="Webbook\MainBundle\Entity\Book" , mappedBy="mainAuthors")
     */
    private $hasBook;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\NotificationBundle\Entity\Notification",mappedBy="user")
     */
    private $notifications;

    /**
     * @var boolean
     * @ORM\Column(name="receive_news_letter" ,type="boolean")
     */
    private $receiveNewsLetter;

    /**
     * @ORM\OneToOne(targetEntity="Webbook\MainBundle\Entity\Media",cascade={"persist","remove","refresh"})
     * @Expose
     * @SerializedName("picture")
     */
    private $picture;



    /**
     * @ORM\OneToOne(targetEntity="Webbook\MainBundle\Entity\Subscription",mappedBy="user",cascade={"persist","remove"})
     */
    private $subscription;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\Purchase" , mappedBy="client" )
     */
    private $purchases;

    /**
     * @var \DateTime
     * @ORM\Column(type="date",name="joined_at")
     */
    private $joinedAt;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MessagingBundle\Entity\Message",mappedBy="sender")
     */
    private $sentMessages;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MessagingBundle\Entity\UserHasMessage",mappedBy="receiver")
     */
    private $messages;

    /**
     * User constructor.
     */

    public function __construct()
    {
        $this->joinedAt=new \DateTime();
        $this->receiveNewsLetter=false;
        $this->notifications=new ArrayCollection();
        $this->hasBook=new ArrayCollection();
        parent::__construct();
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
     * @return mixed
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param mixed $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    public function setFullRoles(array $roles)
    {
        $this->roles = $roles;

    }

    /**
     * @return mixed
     */
    public function getBibliography()
    {
        return $this->bibliography;
    }

    /**
     * @param mixed $bibliography
     */
    public function setBibliography($bibliography)
    {
        $this->bibliography = $bibliography;
    }

    /**
     * @return mixed
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @param mixed $notifications
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;
    }

    /**
     * @return mixed
     */
    public function getHasBook()
    {
        return $this->hasBook;
    }

    /**
     * @param mixed $hasBook
     */
    public function setHasBook($hasBook)
    {
        $this->hasBook = $hasBook;
    }

    /**
     * @return bool
     */
    public function isReceiveNewsLetter()
    {
        return $this->receiveNewsLetter;
    }

    /**
     * @param bool $receiveNewsLetter
     */
    public function setReceiveNewsLetter($receiveNewsLetter)
    {
        $this->receiveNewsLetter = $receiveNewsLetter;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return Subscription
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param mixed $subscription
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * @return mixed
     */
    public function getPurchases()
    {
        return $this->purchases;
    }

    /**
     * @param mixed $purchases
     */
    public function setPurchases($purchases)
    {
        $this->purchases = $purchases;
    }

    /**
     * @return mixed
     */
    public function getJoinedAt()
    {
        return $this->joinedAt;
    }

    /**
     * @param mixed $joinedAt
     */
    public function setJoinedAt($joinedAt)
    {
        $this->joinedAt = $joinedAt;
    }

    /**
     * @return mixed
     */
    public function getSentMessages()
    {
        return $this->sentMessages;
    }

    /**
     * @param mixed $sentMessages
     */
    public function setSentMessages($sentMessages)
    {
        $this->sentMessages = $sentMessages;
    }

    /**
     * @return mixed
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param mixed $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param Profile $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    /**
     * @return string
     * @Serializer\VirtualProperty
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fullName")
     * @Serializer\Expose()
     */
    public function getFullName(){
      return  $this->profile?$this->profile->getFullName():"";
    }
}

