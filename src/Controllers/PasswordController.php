<?php

namespace App\Controllers;

use App\Http\Request;
use App\Http\Response;

class PasswordController
{
    public function secure(Request $request, Response $response)
    {
        dd($request->body());
    }
}
