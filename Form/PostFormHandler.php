<?php

namespace Vich\BlogBundle\Form;

use Vich\BlogBundle\Model\PostManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;

/**
 * PostFormHandler.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class PostFormHandler
{
    /**
     * @var Vich\BlogBundle\Model\PostManagerInterface $postManager 
     */
    private $postManager;
    
    /**
     * Constructs a new instance of PostFormHandler.
     * 
     * @param Vich\BlogBundle\Model\PostManagerInterface $postManager The post manager
     */
    public function __construct(PostManagerInterface $postManager)
    {
        $this->postManager = $postManager;
    }
    
    /**
     * Processes the form.
     * 
     * @param Symfony\Component\HttpFoundation\Request $request The request
     * @param Symfony\Component\Form\Form $form The form
     * @return boolean True if processed successfully, false otherwise
     */
    public function processForm(Request $request, Form $form)
    {
        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $post = $form->getData();
                
                $this->postManager->updatePost($post);
                
                return true;
            }
        }
        
        return false;
    }
}
