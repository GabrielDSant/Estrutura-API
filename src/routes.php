<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;


/**
 * Grupo dos enpoints iniciados por v1
 */

 $app->get('/', function (Request $request, Response $response) {
    return HelloController::hello($request, $response);
});
 $app->post('/', function (Request $request, Response $response) {
    return HelloController::hello($request, $response);
});

?>