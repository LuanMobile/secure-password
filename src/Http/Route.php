<?php

namespace App\Http;

class Route
{
    private static $routes = [];

    public static function post(string $path, string $action)
    {
        return self::$routes[] = [
            'path' => $path,
            'action' => $action,
            'method' => 'POST',
        ];
    }

    public static function routes()
    {
        return self::$routes;
    }
}
