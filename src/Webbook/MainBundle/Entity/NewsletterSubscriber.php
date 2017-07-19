<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterSubscriber
 *
 * @ORM\Table(name="newsletter_subscriber")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\NewsletterSubscriberRepository")
 */
class NewsletterSubscriber
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
     * @ORM\Column(name="email", type="string", length=50, unique=true)
     */
    private $email;

    /**
     * NewsletterSubscriber constructor.
     * @param string $email
     */
    public function __construct($email)
    {
        $this->email = $email;
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
     * Set email
     *
     * @param string $email
     *
     * @return NewsletterSubscriber
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
}

