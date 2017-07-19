<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookReview
 *
 * @ORM\Table(name="book_review")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\BookReviewRepository")
 */
class BookReview
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
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_post",type="date")
     */
    private $datePost;

    /**
     *@ORM\ManyToOne(targetEntity="Core\UserBundle\Entity\User")
     */
    private $user;

    /**
     *@ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\Book" , inversedBy="reviews")
     */
    private $book;

    /**
     * @var string
     * @ORM\Column(name="note",type="text")
     */
    private $note;

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
     * Set rate
     *
     * @param integer $rate
     *
     * @return BookReview
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return \DateTime
     */
    public function getDatePost()
    {
        return $this->datePost;
    }

    /**
     * @param \DateTime $datePost
     */
    public function setDatePost($datePost)
    {
        $this->datePost = $datePost;
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
     * @return mixed
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * @param mixed $book
     */
    public function setBook($book)
    {
        $this->book = $book;
    }
}

