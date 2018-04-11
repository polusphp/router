<?php
declare(strict_types=1);

namespace Polus\Router;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RouterMiddleware implements MiddlewareInterface
{
    /** @var RouterDispatcherInterface */
    protected $routerDispatcher;

    public function __construct(RouterDispatcherInterface $routerDispatcher)
    {
        $this->routerDispatcher = $routerDispatcher;
    }

    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $route = $this->routerDispatcher->dispatch($request);
        $request = $request->withAttribute('route', $route);

        return $handler->handle($request);
    }
}