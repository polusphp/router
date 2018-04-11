<?php
declare(strict_types=1);

namespace Polus\Router;

use Psr\Http\Message\ServerRequestInterface;

interface RouterDispatcherInterface
{
    const NOT_FOUND = 0;
    const FOUND = 1;
    const METHOD_NOT_ALLOWED = 2;
    const METHOD_DONT_ACCEPTS = 3;

    public function dispatch(ServerRequestInterface $request): RouteInterface;
}
