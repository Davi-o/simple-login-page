<?php

use Formatter\RequestFormatter;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Controller\UserController;

require_once __DIR__ .'/../vendor/autoload';

$app = AppFactory::create();

$app->addRoutingMiddleware();

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$app->post('/login', function(Request $request, Response $response, $arguments){
    $request = new RequestFormatter($request);
    $user = new UserController($request);
    $user->doLogin();

    if(! $user->isLoggedIn()){
        // TODO Refactor response
        $response->getBody()->write('Error');
    }
    // TODO Response if is logged in
});

$app->run();