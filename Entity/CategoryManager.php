<?php

namespace Vich\BlogBundle\Entity;

use Vich\BlogBundle\Model\CategoryManager as BaseCategoryManager;
use Doctrine\ORM\EntityManager;
use Vich\BlogBundle\Model\CategoryInterface;

/**
 * CategoryManager.
 * 
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class CategoryManager extends BaseCategoryManager
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
     * Constructs a new instance of CategoryManager.
     * 
     * @param EntityManager $em The entity manager
     * @param string $class The category class name
     */
    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository($class);
        
        $metadata = $this->em->getClassMetadata($class);
        $this->class = $metadata->getName();
    }
    
    /**
     * Updates a category.
     * 
     * @param CategoryInterface $category The category
     * @param boolean $andFlush True if the entity manager should be flushed
     */
    public function updateCategory(CategoryInterface $category, $andFlush = true)
    {
        $this->em->persist($category);
        
        if ($andFlush) {
            $this->em->flush();
        }
    }
    
    /**
     * Deletes a category.
     * 
     * @param CategoryInterface $category The category
     * @param boolean $andFlush True if entity manager should be flushed
     */
    public function deleteCategory(CategoryInterface $category, $andFlush = true)
    {
        $this->em->remove($category);
        
        if ($andFlush) {
            $this->em->flush();
        }
    }
    
    /**
     * Finds a category by name.
     * 
     * @param string $name The category name
     * @return Category The category
     */
    public function findCategoryByName($name)
    {
        return $this->repository->findOneBy(array('name' => $name));
    }
    
    /**
     * Finds a category by slug.
     * 
     * @param string $slug The category slug
     * @return Category The category
     */
    public function findCategoryBySlug($slug)
    {
        return $this->repository->findOneBy(array('slug' => $slug));
    }
    
    /**
     * Gets the category class name.
     * 
     * @return string The class name
     */
    public function getClass()
    {
        return $this->class;
    }
}