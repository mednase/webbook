<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\BookRepository")
 * @ExclusionPolicy("all")
 */
class Book
{
    use ORMBehaviors\Blameable\Blameable;
    use ORMBehaviors\Timestampable\Timestampable;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"show"})
     * @Expose
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Groups({"show"})
     * @Expose
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     * @Expose
     */
    private $token;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\Category")
     * @Serializer\Expose(true)
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\BookBlock",mappedBy="book",cascade={"persist","remove"},orphanRemoval=true, fetch="EAGER")
     * @ORM\OrderBy({"position" = "ASC"})
     */
    private $blocks;

    /**
     * @ORM\ManyToMany(targetEntity="Core\UserBundle\Entity\User",inversedBy="hasBook")
     * @ORM\JoinTable(name="book_has_author")
     * @Groups({"show"})
     * @SerializedName("authors")
     * @Expose
     */
    private $mainAuthors;

    /**
     * @var string
     * @ORM\Column(name="description",type="text")
     * @Expose
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\BookEdition",mappedBy="book",cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\OrderBy({"createdAt" = "ASC"})
     */
    private $editions;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\Media",mappedBy="book",cascade={"persist","remove"},orphanRemoval=true)
     * @Groups({"show"})
     * @Expose
     */
    private $images;

    /**
     * @var bool
     * @ORM\Column(name="published",type="boolean")
     * @Exclude
     */
    private $published;
    /**
     * @var bool
     * @ORM\Column(name="published_preview",type="boolean")
     * @Exclude
     */
    private $publishedPreview;

    /**
     * @var \DateTime
     * @ORM\Column(name="publish_date",type="date",nullable=true)
     * @Expose
     */
    private $publishDate;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     * @Expose
     */
    private $price;

    /**
     * @var string
     * @ORM\Column(name="isbn",type="string")
     * @Expose
     * @SerializedName("ISBN")
     */
    private $ISBN;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255)
     * @Groups({"show"})
     * @Expose
     */
    private $language;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\BookReview" , mappedBy="book", cascade={"remove"})
     * @Expose
     */
    private $reviews;

    /**
     * Book constructor.
     */
    public function __construct(){
        $this->blocks=new ArrayCollection();
        $this->editions=new ArrayCollection();
        $this->images=new ArrayCollection();
        $this->reviews= new ArrayCollection();
        $this->published=false;
        $this->publishedPreview=false;
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
     * Set titre
     *
     * @param string $title
     *
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Book
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
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return bool
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param bool $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * @return mixed
     */
    public function getUnderBlock()
    {
        $res=new ArrayCollection();
        foreach ($this->blocks as $block)
            if($block->getLevel()==0)
                $res->add($block);

        // sorting by position
        $iterator = $res->getIterator();
        $iterator->uasort(function ($a, $b) {
            return ($a->getPosition() > $b->getPosition()) ? 1 : -1;
        });
        $res = new ArrayCollection(iterator_to_array($iterator));
        return $res;
    }

    /**
     * @param mixed $blocks
     * @return $this
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;
        return $this;
    }

    /**
     * @param BookBlock $block
     */
    public function addBlock($block){
        $this->blocks->add($block);
        $block->setBook($this);
    }

    /**
     * @param BookBlock $child
     */
    public function removeBlock($child){
        $this->blocks->remove($this->blocks->indexOf($child));
    }


    /**
     * @return mixed
     */
    public function getMainAuthors()
    {
        return $this->mainAuthors;
    }

    /**
     * @param mixed $mainAuthors
     */
    public function setMainAuthors($mainAuthors)
    {
        $this->mainAuthors = $mainAuthors;
    }

    public function getSlug()
    {
        return self::slugify($this->title);
    }

    static public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param mixed $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @param Media $media
     */
    public function addImage($media)
    {
        $media->setBook($this);
        $this->images->add($media);
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return \DateTime
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param \DateTime $publishDate
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * @param string $ISBN
     */
    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param BookReview $review
     */
    public function addReview(BookReview $review){
        $review->setBook($this);
        $this->reviews->add($review);
    }

    /**
     * @param mixed $reviews
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * @return mixed
     */
    public function getEditions()
    {
        return $this->editions;
    }

    /**
     * @param mixed $editions
     */
    public function setEditions($editions)
    {
        $this->editions = $editions;
    }

    /**
     * @param BookEdition $edition
     */
    public function addEdition($edition){
        $edition->setBook($this);
        $this->editions->add($edition);
    }


    /**
     * @return BookEdition
     */
    public function getActivatedEdition(){
        foreach ($this->editions as $edition){
            if($edition->getActive()==1)
                return $edition;
        }
        return null;
    }

    /**
     * @return bool
     */
    public function isPublishedPreview()
    {
        return $this->publishedPreview;
    }

    /**
     * @param bool $publishedPreview
     */
    public function setPublishedPreview($publishedPreview)
    {
        $this->publishedPreview = $publishedPreview;
    }

    /**
     * @return null|BookEdition
     */
    public function getPublishedEdition()
    {
        /** @var BookEdition $edition */
        foreach ($this->editions as $edition)
            if($edition->isPublished())
                return $edition;
        return null;
    }

}

