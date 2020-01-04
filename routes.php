<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->setBasePath(URL_BASE);

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write('Hello');

    return $response;
});
