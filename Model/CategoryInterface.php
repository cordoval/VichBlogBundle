<?php

namespace Vich\BlogBundle\Model;

/**
 * CategoryInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface CategoryInterface
{
    public function getName();
    
    public function setName($value);
}
