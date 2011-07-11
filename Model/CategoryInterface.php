<?php

namespace Vich\BlogBundle\Model;

/**
 * CategoryInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface CategoryInterface
{
    function getName();
    
    function setName($name);
    
    function getSlug();
    
    function setSlug($slug);
}
