<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Groups;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use JMS\Serializer\Annotation as Serializer;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\MediaRepository")
 * @Vich\Uploadable
 */
class Media
{
    use ORMBehaviors\Sluggable\Sluggable;
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
     *
     * @Vich\UploadableField(mapping="media_file", fileNameProperty="media.name",
     *      size="media.size", mimeType="media.mimeType", originalName="media.originalName")
     *
     * @var File
     */
    private $mediaFile;

    /**
     * @ORM\Embedded(class="Vich\UploaderBundle\Entity\File")
     *
     * @var EmbeddedFile
     */
    private $media;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\Version" , inversedBy="media")
     * @ORM\JoinColumn(name="version_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $version;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\Book" , inversedBy="images")
     * @ORM\JoinColumn(name="book_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $book;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MainBundle\Entity\NewsLetter" , inversedBy="attachments")
     * @ORM\JoinColumn(name="newsletter_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $newsletter;

    /**
     * @ORM\ManyToOne(targetEntity="Webbook\MessagingBundle\Entity\Message" , inversedBy="attachments")
     * @ORM\JoinColumn(name="message_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $message;

    /**
     * Media constructor.
     */
    public function __construct(){
        $this->media = new EmbeddedFile();
        $this->token = sha1(rand(11111, 99999).date('d-m-Y').time());
    }

    /**
     * @param File|UploadedFile $media
     *
     * @return Media
     */
    public function setMediaFile(File $media = null)
    {
        $this->mediaFile = $media;
        return $this;
    }

    /**
     * @return File|null
     */
    public function getMediaFile()
    {
        return $this->mediaFile;
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
     * @return Media
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
     * Returns an array of the fields used to generate the slug.
     *
     * @return array
     */
    public function getSluggableFields()
    {
        return ['mediaName'];
    }

    public function generateSlugValue($values)
    {
        return implode('-', $values);
    }



    /**
     * @param EmbeddedFile $media
     */
    public function setMedia(EmbeddedFile $media)
    {
        $this->media = $media;
    }

    /**
     * @return EmbeddedFile
     */
    public function getMedia()
    {
        return $this->media;
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

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * @param mixed $newsletter
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * @return mixed
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
     * @Serializer\VirtualProperty
     * @Serializer\Type("string")
     * @Serializer\SerializedName("path")
     * @Groups({"book"})
     * @return string
     */
    public function getPath(){
        return 'http://webbook.marzouk-med.loc/uploads/'.$this->media->getName();
    }
}

