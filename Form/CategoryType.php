<?php

namespace Vich\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * CategoryType.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class CategoryType extends AbstractType
{
    /**
     * Gets the form type name.
     * 
     * @return type The name
     */
    public function getName()
    {
        return 'vich_blog_category';
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
