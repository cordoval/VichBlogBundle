<?php

namespace Vich\BlogBundle\Model;

/**
 * Post.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class Post implements PostInterface
{
    /**
     * @var integer $id
     */
    protected $id;
    
    /**
     * @var string $title
     */
    protected $title;
    
    /**
     * @var string $body
     */
    protected $body;
    
    /**
     * @var string $excerpt
     */
    protected $excerpt;
    
    /**
     * @var \DateTime $createdAt
     */
    protected $createdAt;
    
    /**
     * @var \DateTime $updatedAt
     */
    protected $updatedAt;
    
    /**
     * Gets the id.
     * 
     * @return integer The id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Gets the title.
     * 
     * @return string The title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title.
     * 
     * @param string The title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Gets the body.
     * 
     * @return string The body
     */
    public function getBody()
    {
        return $this->body;
    }
    
    /**
     * Sets the body.
     * 
     * @param string $body The body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
    
    /**
     * Gets the excerpt.
     * 
     * @return string The excerpt
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }
    
    /**
     * Sets the excerpt.
     * 
     * @param string $excerpt The excerpt
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    }
    
    /**
     * Gets the created at date.
     * 
     * @return \DateTime The date created
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * Sets the created at date.
     * 
     * @param \DateTime $createdAt The date created
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
    
    /**
     * Gets the updated at date.
     * 
     * @return \DateTime The date updated
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * Sets the updated at date.
     * 
     * @return \DateTime The date updated
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
    
    /**
     * Invoked before the entity is persisted.
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime();
    }
    
    /**
     * Invoked before the entity is updated.
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime();
    }
}
