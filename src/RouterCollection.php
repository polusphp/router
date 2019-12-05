<?php
declare(strict_types=1);

namespace Polus\Router;

interface RouterCollection
{
    public function get(string $route, $handler);
    public function put(string $route, $handler);
    public function post(string $route, $handler);
    public function delete(string $route, $handler);
    public function patch(string $route, $handler);
    public function head(string $route, $handler);

    public function attach(string $prefix, callable $callback);
}
