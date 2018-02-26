<?php

namespace Toutou\http;

use Toutou\http\service\HelloWorldService;
use Toutou\http\service\NameService;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class App
{
    private $container;

    public function __construct()
    {
        $this->container = new containerBuilder();
        $this->container->register('namer', NameService::class)
             ->addArgument('Jean Pierre');
        $this->container->register('uri-display', HelloWorldService::class)
             ->addArgument(new Reference('namer'));     
    }

    public function getService(string $serviceName)
    {
        return $this->container->get($serviceName);
    }
}
    