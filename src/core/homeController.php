<?php

require __DIR__ . '/../../vendor/autoload.php';
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HelloController {
    public static function hello(Request $request, Response $response)  {
        echo "<pre>";
        var_dump($request);
        $response->getBody()->write('Hello World');
        return $response;
    }
}

?>