<?php

namespace Vich\BlogBundle\Model;

/**
 * TagInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface TagInterface
{
    function getName();
    
    function setName($name);
    
    function getSlug();
    
    function setSlug($slug);
}
