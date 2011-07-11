<?php

namespace Vich\BlogBundle\Model;

/**
 * TagManager.
 * 
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
abstract class TagManager implements TagManagerInterface
{
    /**
     * Creates a new tag.
     * 
     * @return Tag The tag
     */
    public function createTag()
    {
        $class = $this->getClass();
        $tag = new $class();
        
        return $tag;
    }
}
