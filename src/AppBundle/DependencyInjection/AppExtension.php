<?php

namespace AppBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class AppExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        //$configuration = new Configuration();
        //$config = $this->processConfiguration($configuration, $configs);
        
        $actionLoader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Module'));

        $actionLoader->load('App/services.yml');
/*
        $actionLoader->load('Game/services.yml');
        $actionLoader->load('GameOfficial/config/services.yml');
        $actionLoader->load('GameReport2016/services.yml');
        
        $actionLoader->load('User/services.yml');

        $actionLoader->load('RegTeam/config/services.yml');
        $actionLoader->load('RegPerson/config/services.yml');
        
        $actionLoader->load('Results2016/services.yml');
        $actionLoader->load('Schedule2016/services.yml');
        
        $actionLoader->load('Project/services.yml');
        $actionLoader->load('Project/User/services.yml');
        $actionLoader->load('Project/Person/services.yml');
        $actionLoader->load('Project/Person/Admin/services.yml');

        $actionLoader->load('Physical/Ayso/services.yml');
        $actionLoader->load('Physical/Person/services.yml');
        
        $actionLoader->load('PoolTeam/config/services.yml');
*/
    }
}
