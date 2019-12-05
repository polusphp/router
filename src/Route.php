<?php
declare(strict_types=1);

namespace Polus\Router;

interface Route
{
    public function getStatus(): int;
    public function getAllows(): array;

    public function getHandler();
    public function getMethod();
    public function getAttributes(): array;
}
