<?php

namespace Vich\BlogBundle\Model;

/**
 * PostManager.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
abstract class PostManager implements PostInterface
{
    /**
     * Creates a new post.
     * 
     * @return Post The post
     */
    public function createPost()
    {
        $class = $this->getClass();
        $post = new $class;
        
        return $post;
    }
}
