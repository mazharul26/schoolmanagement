<?php


namespace Mazharul\Schoolmanagement\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
class AuthController extends AppController
{
    public function signup(Request $request, Response $response)
    {
        return $this->getView()->render($response, "signup.twig");
    }
    /**
     * Process login
     *
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function signin(Request $request , Response $response){
        return $this->getView()->render($response,"signin.twig");
    }


}