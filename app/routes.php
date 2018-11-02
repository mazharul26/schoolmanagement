<?php
use Mazharul\schoolmanagement\Controllers\AuthController;
//use Mazharul\schoolmanagement\Controllers\StoreAdmin\StoreAdminController;



$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'signin.twig');
});
$app->post('/', function ($request, $response) {
    return $this->view->render($response, 'signin.twig');
});
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