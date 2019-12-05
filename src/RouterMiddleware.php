<?php
declare(strict_types=1);

namespace Polus\Router;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RouterMiddleware implements MiddlewareInterface
{
    public const ATTRIBUTE_KEY = 'polus:route';

    protected RouterDispatcherInterface $routerDispatcher;

    public function __construct(RouterDispatcherInterface $routerDispatcher)
    {
        $this->routerDispatcher = $routerDispatcher;
    }

    /**
     * @inheritDoc
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $route = $this->routerDispatcher->dispatch($request);
        if (count($route->getAttributes())) {
            foreach ($route->getAttributes() as $key => $value) {
               $request = $request->withAttribute($key, $value);
            }
        }
        $request = $request->withAttribute(self::ATTRIBUTE_KEY, $route);

        return $handler->handle($request);
    }
}