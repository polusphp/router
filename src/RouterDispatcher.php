<?php declare(strict_types=1);

namespace Polus\Router;

use Psr\Http\Message\ServerRequestInterface;

interface RouterDispatcher
{
    public function dispatch(ServerRequestInterface $request): Route;
}
