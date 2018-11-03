<?php

use Mazharul\Controllers;
use Mazharul\Schoolmanagement\Controllers\AuthController;

use Slim\Http\Request;
use Slim\Http\Response;

$app->get("/", AuthController::class . ":login");
$app->post("/dashboard", AuthController::class . ":loginProccessing");
$app->get("/signup", AuthController::class . ":signup");
$app->post("/", AuthController::class . ":signupProccessing");

$app->get('/dashboard', function ($request, $response) {
    return $this->view->render($response, 'main_dashboard.twig');
});

$app->get('/form', function ($request, $response) {
    return $this->view->render($response, 'formvalidation.twig');
});
$app->get('/gellary', function ($request, $response) {
    return $this->view->render($response, 'gellary.twig');
});
$app->get('/button', function ($request, $response) {
    return $this->view->render($response, 'buttongroup.twig');
});
$app->get('/portfolio', function ($request, $response) {
    return $this->view->render($response, 'portfolio_team.twig');
});
$app->get('/table', function ($request, $response) {
    return $this->view->render($response, 'tables.twig');
});