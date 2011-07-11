<?php

namespace Vich\BlogBundle\Model;

/**
 * Tag.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class Tag implements TagInterface
{
    /**
     * @var integer $id
     */
    protected $id;
    
    /**
     * @var string $name
     */
    protected $name;
    
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
     * Gets the name.
     * 
     * @return string The name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Sets the name.
     * 
     * @param string $name The name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @param \DateTime The date updated
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
