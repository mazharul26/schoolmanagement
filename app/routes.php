<?php
/**
 * Common Routes
 */
use Mazharul\Schoolmanagement\Controllers\AuthController;
use Slim\Http\Request;
use Slim\Http\Response;
$app->get("/", AuthController::class . ":signin");

$app->get("/signup", AuthController::class . ":signup");

$app->post('/dashboard', function ($request, $response) {
    return $this->view->render($response, 'main_dashboard.twig');
});
$app->get('/signup', function ($request, $response) {
    return $this->view->render($response, 'signup.twig');
});


$app->get('/dashboard', function ($request, $response) {
    return $this->view->render($response, 'main_dashboard.twig');
});

$app->get('/form', function ($request, $response) {
    return $this->view->render($response, 'formvalidation.twig');
});
$app->get('/contact', function ($request, $response) {
    return $this->view->render($response, 'contact.twig');
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