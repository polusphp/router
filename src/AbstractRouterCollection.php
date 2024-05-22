<?php declare(strict_types=1);

namespace Polus\Router;

use Polus\Adr\Interfaces\Action;

abstract class AbstractRouterCollection implements RouterCollection
{
    /**
     * @param Action|class-string<Action> $handler
     */
    abstract protected function add(string $verb, string $route, Action|string $handler): void;

    public function any(string $route, Action|string $handler): void
    {
        $this->add('any', $route, $handler);
    }

    /**
     * @inheritDoc
     */
    public function get(string $route, Action|string $handler): void
    {
        $this->add('get', $route, $handler);
    }

    /**
     * @inheritDoc
     */
    public function put(string $route, Action|string $handler): void
    {
        $this->add('put', $route, $handler);
    }

    /**
     * @inheritDoc
     */
    public function post(string $route, Action|string $handler): void
    {
        $this->add('post', $route, $handler);
    }

    /**
     * @inheritDoc
     */
    public function delete(string $route, Action|string $handler): void
    {
        $this->add('delete', $route, $handler);
    }

    /**
     * @inheritDoc
     */
    public function patch(string $route, Action|string $handler): void
    {
        $this->add('patch', $route, $handler);
    }

    /**
     * @inheritDoc
     */
    public function head(string $route, Action|string $handler): void
    {
        $this->add('head', $route, $handler);
    }
}
