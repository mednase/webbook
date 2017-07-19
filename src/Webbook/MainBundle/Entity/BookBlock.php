<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Groups;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * BookBlock
 *
 * @ORM\Table(name="book_block")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\BookBlockRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class BookBlock
{
    use ORMBehaviors\Blameable\Blameable;
    use ORMBehaviors\Timestampable\Timestampable;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"CandT"})
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\Book" , inversedBy="blocks")
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $book;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\BookBlock" , inversedBy="childrens")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\BookBlock" , mappedBy="parent", cascade={"remove","persist"}, orphanRemoval=true)
     * @ORM\OrderBy({"position"="ASC"})
     */
    private $childrens;

    /**
     * @var string
     * @ORM\Column(name="title", type="string",length=255)
     * @Groups({"CandT"})
     *
     */
    private $title;

    /**
     * @var int
     * @ORM\Column(name="level" , type="integer")
     */
    private $level;

    /**
     * @var int
     * @ORM\Column(name="position" , type="integer")
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, nullable=false, unique=true)
     */
    private $token;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\Authorization" ,mappedBy="bookBlock", cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinColumn(referencedColumnName="id",onDelete="CASCADE")
     */
    private $authorizations;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\Version", mappedBy="bookBlock", cascade={"remove","persist"})
     */
    private $versions;

    /**
     * @ORM\OneToOne(targetEntity="Webbook\MainBundle\Entity\BlockOptions",cascade={"persist", "remove"}, orphanRemoval=true)
     * @ORM\JoinColumn(referencedColumnName="id",onDelete="CASCADE")
     */
    private $options;

    /**
     * @ORM\OneToMany(targetEntity="Webbook\MainBundle\Entity\BlockHistoric" , mappedBy="block",cascade={"persist","remove"})
     */
    private $historics;

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
     * @return BookBlock
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

    public function __construct(){
        // default type bloc is set to be a title block
        $this->level=0;
        $this->position=0;
        $this->childrens=new ArrayCollection();
        $this->versions=new ArrayCollection();
        $this->options=new BlockOptions();
        $this->authorizations= new ArrayCollection();
        $this->historics=new ArrayCollection();
        $this->token = sha1(rand(11111, 99999).date('d-m-Y').time());
    }

    public function __toString(){
        return $this->title?$this->title:"zone de text";
    }

    /**
     * @return BookBlock
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param BookBlock $parent
     */
    public function setParent(BookBlock $parent)
    {
        if($parent){
            $this->setBook($parent->getBook());
            $this->level=$parent->getLevel()+1;
        }
        $this->parent = $parent;
    }

    public function removeParent(){
        $this->parent=null;
    }

    /**
     * @return mixed
     */
    public function getChildrens()
    {
        return $this->childrens;
    }

    /**
     * @param mixed $childrens
     */
    public function setChildrens($childrens)
    {
        $this->childrens = $childrens;
    }

    /**
     * @param mixed $child
     */
    public function addChild($child){
        $child->setParent($this);
        $child->setLevel($this->level+1);
        $this->childrens->add($child);
    }

    /**
     * @param mixed $child
     */
    public function removeChild($child){
        $this->childrens->remove($this->childrens->indexOf($child));
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


    /**
     * @return Book
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


    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getVersions()
    {
        return $this->versions;
    }

    /**
     * @param mixed $versions
     */
    public function setVersion($versions)
    {
        $this->versions = $versions;
    }

    /**
     * @param Version $version
     */
    public function addVersions( $version)
    {
        $this->versions->add($version);
        $version->setBookBlock($this);
    }


    /**
     * @return mixed
     */
    public function getAuthorizations()
    {
        return $this->authorizations;
    }

    /**
     * @param mixed $authorizations
     */
    public function setAuthorizations($authorizations)
    {
        /** @var Authorization $authorization */
        foreach ($authorizations as $authorization)
            $authorization->setBookBlock($this);
        $this->authorizations = $authorizations;
    }

    /**
     * @param Authorization $authorization
     */
    public function addAuthorization($authorization){
        $this->authorizations->add($authorization);
        $authorization->setBookBlock($this);
    }


    public function removeAuthorization(Authorization $authorization)
    {
        $this->authorizations->removeElement($authorization);
        $authorization->setBookBlock(null);
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    public static function getBlockChildren($blocks,&$result){
        if(!$blocks)
            $result=array();

        /** @var BookBlock $children */
        foreach ($blocks as $children){
            array_push($result,$children);
            self::getBlockChildren($children->getChildrens(),$result);
        }
    }


    /**
     * @return null|Version
     */
    public function getPublishedVersion()
    {
        /** @var Version $version */
        foreach ($this->versions as $version)
            if($version->getStatus()==3)return $version;
        return null;
    }

    /**
     * @return Version
     */
    public function getLastValidatedVersion(){
        $lastValidatedVersion=null;
        $lastValidatedVersionNumber=0;
        foreach ($this->versions as $version){
            if($version->getNumber()>$lastValidatedVersionNumber &&($version->getStatus()==3 or $version->getStatus()==2)){
                $lastValidatedVersion=$version;
                $lastValidatedVersionNumber=$version->getNumber();
            }
        }
        return $lastValidatedVersion;
    }

    /**
     * @return BlockOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function updateLevel(){
        $this->setLevel($this->getLevelFromNest($this));
    }

    private function getLevelFromNest(BookBlock $block){
        if($block->getParent())
            return 1+$this->getLevelFromNest($block->getParent());
        else
            return 0;
    }

    public function maxDeep(){
        if($this->childrens){
            return $this->array_depth($this->childrens);
        }else
            return 0;
    }

    function array_depth($blocks) {
        $max_depth = 0;
        foreach ($blocks as $bl) {
            if ($bl->getChildrens()) {
                $depth = $this->array_depth($bl->getChildrens()) + 1;
                if ($depth > $max_depth) {
                    $max_depth = $depth;
                }
            }
        }

        return $max_depth;
    }

    /**
     * @return mixed
     */
    public function getHistorics()
    {
        return $this->historics;
    }

    /**
     * @param mixed $historics
     */
    public function setHistorics($historics)
    {
        $this->historics = $historics;
    }

    public function addHistoric(BlockHistoric $blockHistoric){
        $blockHistoric->setBlock($this);
        $this->historics->add($blockHistoric);
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @Serializer\VirtualProperty
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("childrenLength")
     * @Groups({"CandT"})
     * @return integer
     */
    public function getUnderBooks(){
        return count($this->getChildrens());
    }


    /**
     * @param bool $strict
     * @return bool
     */
    public function HasValidator($strict=false)
    {
        $hasValidator=false;
        /** @var Authorization $authorization */
        foreach ($this->getAuthorizations() as $authorization){
            if(in_array('ROLE_VALIDATOR',$authorization->getUser()->getRoles())
                && (!$strict  || !$authorization->isLimited()) ){
                $hasValidator=true;
                break;
            }
        }
        if($hasValidator==false && $this->getParent()!=null)
            $hasValidator=$this->getParent()->HasValidator(true);

        return $hasValidator;
    }
}

