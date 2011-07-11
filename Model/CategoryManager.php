<?php

namespace Vich\BlogBundle\Model;

/**
 * CategoryManager.
 * 
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
abstract class CategoryManager implements CategoryManagerInterface
{
    /**
     * Creates a new category.
     * 
     * @return Category The category
     */
    public function createCategory()
    {
        $class = $this->getClass();
        $cat = new $class();
        
        return $cat;
    }
}
