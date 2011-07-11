<?php

namespace Vich\BlogBundle\Model;

/**
 * TagInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface TagInterface
{
    public function getName();
    
    public function setName($value);
}
