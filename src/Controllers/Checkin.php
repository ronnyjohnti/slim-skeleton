<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Checkin
{
    public function index(Request $request, Response $response): Response
    {
        $response->getBody()->write('<h1>Checkin</h1>');
        return $response;
    }
}
