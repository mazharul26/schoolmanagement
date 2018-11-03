<?php


namespace Mazharul\Schoolmanagement\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class AuthController extends AppController
{
    public function login(Request $request, Response $response)
    {
        return $this->getView()->render($response, "signin.twig");
    }

    public function loginProccessing(Request $request, Response $response){

        return $this->getView()->render($response, "main_dashboard.twig");
    }

    public function signup(Request $request, Response $response)
    {
        return $this->getView()->render($response, "signup.twig");
    }


    public function signupProccessing(Request $request, Response $response){

        return $this->getView()->render($response, "signin.twig");

    }


}