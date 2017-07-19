<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Knp\DoctrineBehaviors\Model as ORMBehaviors;
/**
 * Authorization
 *
 * @ORM\Table(name="authorization")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\AuthorizationRepository")
 */
class Authorization
{
	use ORMBehaviors\Blameable\Blameable;
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
     * @var bool
     *
     * @ORM\Column(name="canRead", type="boolean")
     */
    private $canRead;

    /**
     * @var bool
     *
     * @ORM\Column(name="canWrite", type="boolean")
     */
    private $canWrite;

    /**
     * @var bool
     *
     * @ORM\Column(name="canDelete", type="boolean")
     */
    private $canDelete;

    /**
     * @var bool
     *
     * @ORM\Column(name="limited", type="boolean")
     */
    private $limited;


    /**
     * @ORM\ManyToOne(targetEntity="Core\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\BookBlock",inversedBy="authorizations")
     * @ORM\JoinColumn(name="book_block_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $bookBlock;

    /**
     * Authorization constructor.
     */
    public function __construct(){
        $this->limited=false;
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
     * @return Authorization
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

    /**
     * Set canRead
     *
     * @param boolean $canRead
     *
     * @return Authorization
     */
    public function setCanRead($canRead)
    {
        $this->canRead = $canRead;

        return $this;
    }

    /**
     * Get canRead
     *
     * @return bool
     */
    public function getCanRead()
    {
        return $this->canRead;
    }

    /**
     * Set canWrite
     *
     * @param boolean $canWrite
     *
     * @return Authorization
     */
    public function setCanWrite($canWrite)
    {
        $this->canWrite = $canWrite;

        return $this;
    }

    /**
     * Get canWrite
     *
     * @return bool
     */
    public function getCanWrite()
    {
        return $this->canWrite;
    }

    /**
     * Set canDelete
     *
     * @param boolean $canDelete
     *
     * @return Authorization
     */
    public function setCanDelete($canDelete)
    {
        $this->canDelete = $canDelete;

        return $this;
    }

    /**
     * Get canDelete
     *
     * @return bool
     */
    public function getCanDelete()
    {
        return $this->canDelete;
    }

	public function __toString(){
		return $this->token;
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

    /**
     * @return BookBlock
     */
    public function getBookBlock()
    {
        return $this->bookBlock;
    }

    /**
     * @param BookBlock $bookBlock
     */
    public function setBookBlock($bookBlock)
    {
        $this->bookBlock = $bookBlock;
    }

    /**
     * @return bool
     */
    public function isLimited()
    {
        return $this->limited;
    }

    /**
     * @param bool $limited
     */
    public function setLimited($limited)
    {
        $this->limited = $limited;
    }

}

