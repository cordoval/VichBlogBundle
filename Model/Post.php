<?php

namespace Vich\BlogBundle\Model;

/**
 * Post.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
abstract class Post implements PostInterface
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
     * @var string $slug
     */
    protected $slug;
    
    /**
     * @var string $body
     */
    protected $body;
    
    /**
     * @var string $excerpt
     */
    protected $excerpt;
    
    /**
     * @var boolean $active
     */
    protected $active;
    
    /**
     * @var \DateTime $activateAt
     */
    protected $activateAt;
    
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
     * Gets the slug.
     * 
     * @return string The slug
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * Sets the slug.
     * 
     * @param string The slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
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
     * Gets whether or not the post is active.
     * 
     * @return boolean True if active, false otherwise
     */
    public function getActive()
    {
        return $this->active;
    }
    
    /**
     * Sets whether or not the post is active.
     * 
     * @param boolean $active True if active, false otherwise
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
    
    /**
     * Gets the activate date.
     * 
     * @return \DateTime The activate date
     */
    public function getActivateAt()
    {
        return $this->activateAt;
    }
    
    /**
     * Sets the activate date.
     * 
     * @param type $activateAt The activate date
     */
    public function setActivateAt($activateAt)
    {
        $this->activateAt = $activateAt;
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
