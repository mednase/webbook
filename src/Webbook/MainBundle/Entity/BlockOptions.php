<?php

namespace Webbook\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlockOptions
 *
 * @ORM\Table(name="block_options")
 * @ORM\Entity(repositoryClass="Webbook\MainBundle\Repository\BlockOptionsRepository")
 */
class BlockOptions
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
     * @var bool
     * @ORM\Column(name="show_title" , type="boolean")
     */
    private $showTitle;

    /**
     * @var bool
     * @ORM\Column(name="indexed" , type="boolean")
     */
    private $indexed;

    /**
     * @var bool
     * @ORM\Column(name="paginated" , type="boolean")
     */
    private $paginated;

    /**
     * BlockOptions constructor.
     */
    public function __construct(){
        $this->showTitle=true;
        $this->indexed=true;
        $this->paginated=true;
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
     * @return bool
     */
    public function isShowTitle()
    {
        return $this->showTitle;
    }

    /**
     * @param bool $showTitle
     */
    public function setShowTitle($showTitle)
    {
        $this->showTitle = $showTitle;
    }

    /**
     * @return bool
     */
    public function isIndexed()
    {
        return $this->indexed;
    }

    /**
     * @param bool $indexed
     */
    public function setIndexed($indexed)
    {
        $this->indexed = $indexed;
    }

    /**
     * @return bool
     */
    public function isPaginated()
    {
        return $this->paginated;
    }

    /**
     * @param bool $paginated
     */
    public function setPaginated($paginated)
    {
        $this->paginated = $paginated;
    }
}

