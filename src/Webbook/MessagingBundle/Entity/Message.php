<?php

namespace Webbook\MessagingBundle\Entity;

use Core\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Webbook\MainBundle\Entity\Media;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="Webbook\MessagingBundle\Repository\MessageRepository")
 */
class Message
{
    use ORMBehaviors\SoftDeletable\SoftDeletable;
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
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSend", type="datetime" ,nullable=true)
     */
    private $dateSend;

    /**
     * @var bool
     *
     * @ORM\Column(name="sent", type="boolean")
     */
    private $sent;

    /**
     * @var bool
     *
     * @ORM\Column(name="important", type="boolean")
     */
    private $important;

    /**
     * @ORM\ManyToOne(targetEntity="Core\UserBundle\Entity\User" ,inversedBy="sentMessages")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    public $sender;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MessagingBundle\Entity\UserHasMessage" , mappedBy="message",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE")
     */
    public $receivers;


    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\Media" , mappedBy="message" , cascade={"persist"})
     */
    private $attachments;

    /**
     * Message constructor.
     */
    function __construct(){
        $this->important=false;
        $this->sent=false;
        $this->attachments=new ArrayCollection();
        $this->receivers=new ArrayCollection();
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
     * Set subject
     *
     * @param string $subject
     *
     * @return Message
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Message
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set dateSend
     *
     * @param \DateTime $dateSend
     *
     * @return Message
     */
    public function setDateSend($dateSend)
    {
        $this->dateSend = $dateSend;

        return $this;
    }

    /**
     * Get dateSend
     *
     * @return \DateTime
     */
    public function getDateSend()
    {
        return $this->dateSend;
    }


    /**
     * @return User
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param User $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return mixed
     */
    public function isSent()
    {
        return $this->sent;
    }

    /**
     * @param mixed $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }

    /**
     * @return mixed
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param mixed $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @param Media $attachment
     */
    public function addAttachment($attachment)
    {
        $attachment->setMessage($this);
        $this->attachments->add($attachment);
    }

    public function addReceiver(UserHasMessage $user)
    {
        $user->setMessage($this);
        $this->receivers->add($user);
    }

    /**
     * @return mixed
     */
    public function getImportant()
    {
        return $this->important;
    }

    /**
     * @param mixed $important
     */
    public function setImportant($important)
    {
        $this->important = $important;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
}

