<?php

namespace Mazharul\Schoolmanagement\Controllers;

use Psr\Container\ContainerInterface;
use Slim\Views\Twig;
/**
 * Class AppController
 * @package Previewtechs\DokanWeb\Controllers
 */
class AppController
{
    /**
     * @var ContainerInterface
     */
    protected $container;
    /**
     * AppController constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    /**
     * @return Twig
     */
    public function getView()
    {
        return $this->container->get("view");
    }
}