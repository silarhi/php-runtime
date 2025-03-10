<?php

use Psr\Http\Message\ServerRequestInterface;

require __DIR__.'/autoload.php';

return fn (ServerRequestInterface $request) => new \GuzzleHttp\Psr7\Response(200, [], 'Hello PSR-7');
