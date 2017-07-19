<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 *
 * @ORM\Table(name="subscription")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\SubscriptionRepository")
 */
class Subscription
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
     * @ORM\Column(name="ip", type="string")
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFrom", type="date")
     */
    private $dateFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateTo", type="date")
     */
    private $dateTo;

    /**
     * @var string
     *
     * @ORM\Column(name="establishmentName", type="string", length=255)
     */
    private $establishmentName;

    /**
     * @var string
     *
     * @ORM\Column(name="establishmentAddress", type="string", length=255)
     */
    private $establishmentAddress;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", options={"comment":"1 =>global 2=>theme"})
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="Webbook\MainBundle\Entity\Category")
     * @ORM\JoinTable(name="subscription_theme",
     *      joinColumns={@ORM\JoinColumn(name="subscription_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="category_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $categories;

    /**
     * @ORM\OneToOne(targetEntity="Core\UserBundle\Entity\User",inversedBy="subscription")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Subscription constructor.
     */
    public function __construct()
    {
        // default type global
        $this->type=1;
        $this->dateFrom=new \DateTime();
        $this->dateTo=new \DateTime('+1 year');
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
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     *
     * @return Subscription
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     *
     * @return Subscription
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set establishmentName
     *
     * @param string $establishmentName
     *
     * @return Subscription
     */
    public function setEstablishmentName($establishmentName)
    {
        $this->establishmentName = $establishmentName;

        return $this;
    }

    /**
     * Get establishmentName
     *
     * @return string
     */
    public function getEstablishmentName()
    {
        return $this->establishmentName;
    }

    /**
     * Set establishmentAddress
     *
     * @param string $establishmentAddress
     *
     * @return Subscription
     */
    public function setEstablishmentAddress($establishmentAddress)
    {
        $this->establishmentAddress = $establishmentAddress;

        return $this;
    }

    /**
     * Get establishmentAddress
     *
     * @return string
     */
    public function getEstablishmentAddress()
    {
        return $this->establishmentAddress;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

}

