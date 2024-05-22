<?php declare(strict_types=1);

namespace Polus\Router;

enum RouteStatus
{
    case NotFound;
    case Found;
    case MethodNotAllowed;
    case MethodDontAccepts;
}
