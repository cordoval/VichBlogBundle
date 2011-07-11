<?php

namespace Vich\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * TagType.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class TagType extends AbstractType
{
    /**
     * Gets the form type name.
     * 
     * @return type The name
     */
    public function getName()
    {
        return 'vich_blog_tag';
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
            ->add('name', 'text')
        ;
    }
}
