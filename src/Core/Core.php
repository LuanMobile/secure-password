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
            if (!str_contains($route['path'], explode('/api', $_SERVER['REQUEST_URI'])[1])) {
                return Response::json(['error' => 'Route not found!'], 404);
            }

            if ($route['method'] !== Request::method()) {
                Response::json([
                    'error' => 'Sorry, method not allowed!'
                ], 405);
                return;
            }
            [$controller, $action] = explode('@', $route['action']);
            $controller = $prefixController . $controller;
            $extendController = new $controller;
            $extendController->$action(new Request, new Response);
        }
    }
}
