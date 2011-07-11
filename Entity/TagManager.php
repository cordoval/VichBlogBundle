<?php

namespace Vich\BlogBundle\Entity;

use Vich\BlogBundle\Model\TagManager as BaseTagManager;
use Doctrine\ORM\EntityManager;
use Vich\BlogBundle\Model\TagInterface;

/**
 * TagManager.
 * 
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class TagManager extends BaseTagManager
{
    /**
     * @var Doctrine\ORM\EntityManager $em
     */
    private $em;
    
    /**
     * @var Doctrine\ORM\EntityRepository $repository
     */
    private $repository;
    
    /**
     * @var string $class
     */
    private $class;
    
    /**
     * Constructs a new instance of TagManager.
     * 
     * @param EntityManager $em The entity manager
     * @param string $class The tag class name
     */
    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository($class);
        
        $metadata = $this->em->getClassMetadata($class);
        $this->class = $metadata->getName();
    }
    
    /**
     * Updates a tag.
     * 
     * @param TagInterface $tag The tag
     * @param boolean $andFlush True if the entity manager should be flushed
     */
    public function updateTag(TagInterface $tag, $andFlush = true)
    {
        $this->em->persist($tag);
        
        if ($andFlush) {
            $this->em->flush();
        }
    }
    
    /**
     * Deletes a tag.
     * 
     * @param TagInterface $tag The tag
     * @param boolean $andFlush True if entity manager should be flushed
     */
    public function deleteTag(TagInterface $tag, $andFlush = true)
    {
        $this->em->remove($tag);
        
        if ($andFlush) {
            $this->em->flush();
        }
    }
    
    /**
     * Finds a tag by name.
     * 
     * @param string $name The tag name
     * @return Tag The tag
     */
    public function findTagByName($name)
    {
        return $this->repository->findOneBy(array('name' => $name));
    }
    
    /**
     * Finds a tag by slug.
     * 
     * @param string $slug The tag slug
     * @return Tag The tag
     */
    public function findTagBySlug($slug)
    {
        return $this->repository->findOneBy(array('slug' => $slug));
    }
    
    /**
     * Gets the tag class name.
     * 
     * @return string The class name
     */
    public function getClass()
    {
        return $this->class;
    }
}