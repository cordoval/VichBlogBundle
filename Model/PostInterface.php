<?php

namespace Vich\BlogBundle\Model;

/**
 * PostInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface PostInterface
{
    function getTitle();
    
    function setTitle($title);
    
    function getSlug();
    
    function setSlug($slug);
    
    function getBody();
    
    function setBody($body);
    
    function getExcerpt();
    
    function setExcerpt($excerpt);
}
