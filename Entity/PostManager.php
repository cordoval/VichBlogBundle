<?php

namespace Vich\BlogBundle\Entity;

use Doctrine\ORM\EntityManager;
use Vich\BlogBundle\Model\PostInterface;
use Vich\BlogBundle\Model\PostManager as BasePostManager;

/**
 * PostManager.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class PostManager extends BasePostManager
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
     * Constructs a new instance of PostManager.
     * 
     * @param Doctrine\ORM\EntityManager $em The entity manager
     * @param string The Post class
     */
    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->repository = $this->em->getRepository($class);
        
        $metadata = $this->em->getClassMetadata($class);
        $this->class = $metadata->name;
    }
    
    /**
     * Updates a post.
     * 
     * @param PostInterface $post The post
     * @param boolean $andFlush True if should flush the entity manager
     */
    public function updatePost(PostInterface $post, $andFlush = true)
    {
        $this->em->persist($post);
        
        if ($andFlush) {
            $this->em->flush();
        }
    }
    
    /**
     * Deletes a post.
     * 
     * @param PostInterface $post The post
     * @param boolean $andFlush True if should flush the entity manager
     */
    public function deletePost(PostInterface $post, $andFlush = true)
    {
        $this->em->remove($post);
        
        if ($andFlush) {
            $this->em->flush();
        }
    }
    
    /**
     * Finds a post by its slug.
     * 
     * @param string $slug The slug
     * @return Post The post
     */
    public function findPostBySlug($slug)
    {
        return $this->repository->findOneBy(array('slug' => $slug));
    }
    
    /**
     * Finds all of the posts.
     * 
     * @return \Traversable The posts
     */
    public function findPosts()
    {
        return $this->repository->findAll();
    }
    
    /**
     * Gets the post class.
     * 
     * @return string The post class name
     */
    public function getClass()
    {
        return $this->class;
    }
}
