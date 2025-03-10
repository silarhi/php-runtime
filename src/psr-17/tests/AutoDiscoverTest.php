<?php

namespace Runtime\Psr17\Tests;

use PHPUnit\Framework\TestCase;
use Runtime\Psr17\Runtime;

class AutoDiscoverTest extends TestCase
{
    public function testAutoDiscoverClasses()
    {
        $classes = [
            \Symfony\Runtime\Psr\Http\Message\ResponseInterfaceRuntime::class,
            \Symfony\Runtime\Psr\Http\Message\ServerRequestInterfaceRuntime::class,
            \Symfony\Runtime\Psr\Http\Server\RequestHandlerInterfaceRuntime::class,
        ];

        foreach ($classes as $class) {
            $this->assertTrue(class_exists($class));
            $this->assertTrue(is_subclass_of($class, Runtime::class));
        }
    }
}
