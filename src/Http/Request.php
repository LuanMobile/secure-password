<?php

namespace App\Http;

class Request
{
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function body()
    {
        $json = json_decode(file_get_contents('php://input'), true) ?? [];

        $data = match (self::method()) {
            'GET' => $_GET,
            'PUT', 'POST', 'DELETE' => $json,
        };
        return $data;
    }
}
