<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\MainBundle\Repository\BlogPostRepository")
 */
class BlogPost
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $announcement;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", name="is_available", options={"default"=false})
     */
    private $isAvailable;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="created_at", nullable=false, options={"default"="now()"})
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="modified_at", nullable=false, options={"default"="now()"})
     */
    private $modifiedAt;

    /**
     * BlogPost constructor.
     */
    public function __construct()
    {
        $this->setAvailable(false)
            ->setCreatedAt(new \DateTime())
            ->setModifiedAt($this->getCreatedAt());
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return BlogPost
     */
    public function setTitle($title): BlogPost
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * @param string $announcement
     * @return BlogPost
     */
    public function setAnnouncement($announcement): BlogPost
    {
        $this->announcement = $announcement;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return BlogPost
     */
    public function setContent(string $content): BlogPost
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->isAvailable;
    }

    /**
     * @param bool $isAvailable
     * @return BlogPost
     */
    public function setAvailable(bool $isAvailable): BlogPost
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return BlogPost
     */
    public function setCreatedAt(\DateTime $createdAt): BlogPost
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedAt(): \DateTime
    {
        return $this->modifiedAt;
    }

    /**
     * @param \DateTime $modifiedAt
     * @return BlogPost
     */
    public function setModifiedAt(\DateTime $modifiedAt): BlogPost
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }
}
