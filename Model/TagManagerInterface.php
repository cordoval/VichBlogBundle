<?php

namespace Vich\BlogBundle\Model;

/**
 * TagManagerInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class TagManagerInterface
{
    function createTag();
    
    function updateTag(TagInterface $post);
    
    function deleteTag(TagInterface $post);
    
    function findTagByName($name);
    
    function findTagBySlug($slug);
    
    function getClass();
}
