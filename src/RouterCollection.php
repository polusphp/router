<?php declare(strict_types=1);

namespace Polus\Router;

use Polus\Adr\Interfaces\Action;

interface RouterCollection
{
    /**
     * @param Action|class-string<Action> $handler
     */
    public function any(string $route, Action|string $handler): void;

    /**
     * @param Action|class-string<Action> $handler
     */
    public function get(string $route, Action|string $handler): void;

    /**
     * @param Action|class-string<Action> $handler
     */
    public function put(string $route, Action|string $handler): void;

    /**
     * @param Action|class-string<Action> $handler
     */
    public function post(string $route, Action|string $handler): void;

    /**
     * @param Action|class-string<Action> $handler
     */
    public function delete(string $route, Action|string $handler): void;

    /**
     * @param Action|class-string<Action> $handler
     */
    public function patch(string $route, Action|string $handler): void;

    /**
     * @param Action|class-string<Action> $handler
     */
    public function head(string $route, Action|string $handler): void;

    /**
     * @param callable(RouterCollection): void $callback
     */
    public function attach(string $prefix, callable $callback): void;
}
