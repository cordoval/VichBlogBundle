<?php

namespace Vich\BlogBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * Configuration.
 * 
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class Configuration
{
    /**
     * Gets the configuration tree for the extension.
     * 
     * @return Tree The configuration tree
     */
    public function getConfigTree()
    {
        $tb = new TreeBuilder();
        $root = $tb->root('vich_blog')
            ->children()
                ->scalarNode('db_driver')->cannotBeOverwritten()->isRequired()->end()
                ->arrayNode('model')
                    ->isRequired()
                    ->children()
                        ->scalarNode('post')->isRequired()->end()
                        ->scalarNode('tag')->isRequired()->end()
                        ->scalarNode('category')->isRequired()->end()
                    ->end()
                ->end()
                ->arrayNode('service')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->arrayNode('manager')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->scalarNode('post')->cannotBeEmpty()->defaultValue('vich_blog.manager.post.default')->end()
                                ->scalarNode('tag')->cannotBeEmpty()->defaultValue('vich_blog.manager.tag.default')->end()
                                ->scalarNode('category')->cannotBeEmpty()->defaultValue('vich_blog.manager.category.default')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;
        
        return $tb->buildTree();
    }
}