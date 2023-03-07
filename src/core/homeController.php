<?php

require __DIR__ . '/../../vendor/autoload.php';
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


class HelloController {

    private $request;
    private $response;

    public function __construct(Request $request, Response $response) {
        $this->request = $request;
        $this->response = $response;
    }
    
    public static function hello($request, $response)  {
        $args = json_decode($request->getBody(), true);

        $response->getBody()->write(json_encode($args));

        return $response
            ->withHeader('Content-Type', 'application/json');
    }
}

?>