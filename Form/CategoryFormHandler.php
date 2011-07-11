<?php

namespace Vich\BlogBundle\Form;

use Vich\BlogBundle\Model\CategoryManagerInterface;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * CategoryFormHandler.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class CategoryFormHandler
{
    /**
     * @var Vich\BlogBundle\Model\CategoryManagerInterface $categoryManager
     */
    private $categoryManager;
    
    /**
     * Constructs a new instance of CategoryFormHandler.
     * 
     * @param Vich\BlogBundle\Model\CategoryManagerInterface $categoryManager The category manager
     */
    public function __construct(CategoryManagerInterface $categoryManager)
    {
        $this->categoryManager = $categoryManager;
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
                $cat = $form->getData();
                
                $this->categoryManager->updateCategory($cat);
                
                return true;
            }
        }
        
        return false;
    }
}
