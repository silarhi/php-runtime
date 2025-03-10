<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

require __DIR__.'/autoload.php';

return fn (array $context) => new class implements RequestHandlerInterface {
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $response = new \Laminas\Diactoros\Response();
        $response->getBody()->write('Hello PSR-15');

        return $response;
    }
};
