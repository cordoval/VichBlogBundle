<?php

namespace Vich\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * PostType.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class PostType extends AbstractType
{
    /**
     * Gets the form type name.
     * 
     * @return type The name
     */
    public function getName()
    {
        return 'vich_blog_post';
    }
    
    /**
     * Builds the form.
     * 
     * @param FormBuilder $builder The builder
     * @param array $options The options
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('body', 'textarea')
            ->add('excerpt', 'textarea')
        ;
    }
}
