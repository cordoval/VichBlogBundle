<?php

namespace Vich\BlogBundle\Model;

/**
 * PostManagerInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface PostManagerInterface
{
    function createPost();
    
    function updatePost(PostInterface $post);
    
    function deletePost(PostInterface $post);
    
    function findPostBySlug($slug);
    
    function getClass();
}
