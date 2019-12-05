<?php
declare(strict_types=1);

namespace Polus\Router;

use Psr\Http\Message\ServerRequestInterface;

interface RouterDispatcher
{
    public const NOT_FOUND = 0;
    public const FOUND = 1;
    public const METHOD_NOT_ALLOWED = 2;
    public const METHOD_DONT_ACCEPTS = 3;

    public function dispatch(ServerRequestInterface $request): Route;
}
