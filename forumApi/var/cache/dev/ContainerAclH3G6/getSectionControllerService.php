<?php

namespace ContainerAclH3G6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSectionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Forum\Section\SectionController' shared autowired service.
     *
     * @return \App\Controller\Forum\Section\SectionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Forum/Section/SectionController.php';

        $container->services['App\\Controller\\Forum\\Section\\SectionController'] = $instance = new \App\Controller\Forum\Section\SectionController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\Forum\\Section\\SectionController', $container));

        return $instance;
    }
}
