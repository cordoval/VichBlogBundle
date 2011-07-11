<?php

namespace Vich\BlogBundle\Form;

use Vich\BlogBundle\Model\TagManagerInterface;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * TagFormHandler.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class TagFormHandler
{
    /**
     * @var Vich\BlogBundle\Model\TagManagerInterface $tagManager
     */
    private $tagManager;
    
    /**
     * Constructs a new instance of TagFormHandler.
     * 
     * @param Vich\BlogBundle\Model\TagManagerInterface $tagManager The tag manager
     */
    public function __construct(CategoryManagerInterface $tagManager)
    {
        $this->tagManager = $tagManager;
    }
    
    /**
     * Processes the form.
     * 
     * @param Symfony\Component\HttpFoundation\Request $request The request
     * @param Symfony\Component\Form\Form $form The form
     * @return boolean True if the form processed successfully, false otherwise
     */
    public function processForm(Request $request, Form $form)
    {
        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $tag = $form->getData();
                
                $this->tagManager->updateTag($tag);
                
                return true;
            }
        }
        
        return false;
    }
}
