<?php

namespace Vich\BlogBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Definition\Processor;
use Vich\BlogBundle\DependencyInjection\Configuration;

/**
 * VichBlogExtension.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class VichBlogExtension extends Extension
{   
    /**
     * Loads the extension.
     * 
     * @param array $configs The configuration
     * @param ContainerBuilder $container The container builder
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();
        
        $config = $processor->process($configuration->getConfigTree(), $configs);
        
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        
        if (!in_array(strtolower($config['db_driver']), array('orm', 'mongodb'))) {
            throw new \InvalidArgumentException(
                sprintf(
                    'Invalid "db_driver" configuration option specified: "%s"',
                    $config['db_driver']
                )
            );
        }
        
        $loader->load(sprintf('%s.xml'), $config['db_driver']);
        
        $toLoad = array('form.xml');
        foreach ($toLoad as $file) {
            $loader->load($file);
        }
        
        $models = array('post', 'tag', 'category');
        foreach ($models as $model) {
            $container->setParameter(sprintf('vich_blog.model.%s.class', $model), $config['model'][$model]);
            $container->setAlias(sprintf('vich_blog.%s_manager', $model), $config['service']['manager'][$model]);
        }
    }
}