<?php

namespace App\Core;

use App\Http\Request;
use App\Http\Response;

class Core
{
    public static function dispatch(array $routes)
    {
        $prefixController = 'App\\Controllers\\';

        foreach ($routes as $route) {
            [$controller, $action] = explode('@', $route['action']);
            $controller = $prefixController . $controller;
            $extendController = new $controller;
            $extendController->$action(new Request, new Response);
        }
    }
}
