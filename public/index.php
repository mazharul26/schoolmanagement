<?php

use Illuminate\Events\Dispatcher;
define("ROOT_DIR", dirname(__DIR__));

require ROOT_DIR.DIRECTORY_SEPARATOR."vendor/autoload.php";
$app = new \Slim\App();
$container = $app->getContainer();

$container['view'] = function ($container) {
    $view=new\Slim\Views\Twig(ROOT_DIR.DIRECTORY_SEPARATOR.'/template');
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new Slim\Views\TwigExtension($router, $uri));

    return $view;
};
require ROOT_DIR.DIRECTORY_SEPARATOR."app/db.php";//store-admin related routes included here.
require ROOT_DIR.DIRECTORY_SEPARATOR."app/routes.php";//store-admin related routes included here.
$app->run();