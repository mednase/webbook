<?php

namespace Webbook\MessagingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserHasMessage
 *
 * @ORM\Table(name="user_has_message")
 * @ORM\Entity(repositoryClass="Webbook\MessagingBundle\Repository\UserHasMessageRepository")
 */
class UserHasMessage
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
     * @ORM\ManyToOne(targetEntity="Core\UserBundle\Entity\User" ,inversedBy="messages")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE",fieldName="user_id")
     */
    private $receiver;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MessagingBundle\Entity\Message" , inversedBy="receivers")
     * @ORM\JoinColumn(nullable=false,onDelete="CASCADE",fieldName="message_id")
     */
    private $message;


    /**
     * @var bool
     *
     * @ORM\Column(name="seen", type="boolean")
     */
    private $seen;

    /**
     * @var bool
     *
     * @ORM\Column(name="important", type="boolean")
     */
    private $important;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;


    function __construct($user){
        $this->seen=false;
        $this->important=false;
        $this->deleted=false;
        $this->receiver=$user;
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
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return bool
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return bool
     */
    public function isSeen()
    {
        return $this->seen;
    }

    /**
     * @param bool $seen
     */
    public function setSeen($seen)
    {
        $this->seen = $seen;
    }

    /**
     * @return bool
     */
    public function isImportant()
    {
        return $this->important;
    }

    /**
     * @param bool $important
     */
    public function setImportant($important)
    {
        $this->important = $important;
    }
}

