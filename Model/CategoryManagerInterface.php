<?php

namespace Vich\BlogBundle\Model;

/**
 * CategoryManagerInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class CategoryManagerInterface
{
    function createCategory();
    
    function updateCategory(CategoryInterface $post);
    
    function deleteCategory(CategoryInterface $post);
    
    function findCategoryByName($name);
    
    function findCategoryBySlug($slug);
    
    function getClass();
}
