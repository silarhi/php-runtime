<?php

namespace Runtime\RoadRunnerNyholm;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Symfony\Component\Runtime\GenericRuntime;
use Symfony\Component\Runtime\RunnerInterface;

/**
 * A runtime for RoadRunner.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class Runtime extends GenericRuntime
{
    public function getRunner(?object $application): RunnerInterface
    {
        if ($application instanceof RequestHandlerInterface) {
            return new Runner(fn (ServerRequestInterface $r) => $application->handle($r));
        }

        if (is_callable($application)) {
            return new Runner($application);
        }

        return parent::getRunner($application);
    }
}
