<?php


namespace Mazharul\Schoolmanagement\Controllers;

use Illuminate\Database\Capsule\Manager;
use Slim\Http\Request;
use Slim\Http\Response;

class AuthController extends AppController
{
    /**
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function login(Request $request, Response $response)
    {
        return $this->getView()->render($response, "signin.twig");
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function loginProccessing(Request $request, Response $response)
    {

        $postData = $request->getParsedBody();
        return $this->getView()->render($response, "main_dashboard.twig");
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function signup(Request $request, Response $response)
    {
        return $this->getView()->render($response, "signup.twig");
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function signupProccessing(Request $request, Response $response)
    {
        $postData = $request->getParsedBody();
        $table = Manager::table("users")->insert($postData);



            return $this->getView()->render($response, "signin.twig");


    }


}