<?php declare(strict_types=1);

namespace Polus\Router;

use Polus\Adr\Interfaces\Action;

interface Route
{
    public function getStatus(): RouteStatus;

    /**
     * @return list<string>
     */
    public function getAllows(): array;

    /**
     * @return Action|class-string<Action>|null
     */
    public function getHandler(): Action|string|null;

    public function getMethod(): string;

    /**
    * @return array<string, mixed>
    */
    public function getAttributes(): array;
}
