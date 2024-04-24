<?php

namespace App\Controllers;

use App\Http\Request;
use App\Http\Response;

class PasswordController
{
    public function secure(Request $request, Response $response)
    {
        $password = $request->body()['password'];
        $errors = [];

        if (strlen($password) < 8) {
            array_push($errors, 'Sua senha possui menos de 08 caracteres');
        }
        if (!preg_match('/\d/', $password)) {
            array_push($errors, "Sua senha não possui nenhum digito númerico!");
        }
        if (!preg_match('/[a-z]/', $password)) {
            array_push($errors, "Sua senha não possui letras minúsculas!");
        }
        if (!preg_match('/[A-Z]/', $password)) {
            array_push($errors, "Sua senha não possui letras maiúsculas!");
        }
        if (!preg_match('/[!@#$%^&*().]/', $password)) {
            array_push($errors, "Sua senha não possui caracteres especiais!");
        }

        if (!empty($errors)) {
            return $response->json(['errors' => $errors], 400);
        } else {
            http_response_code(204);
        }
    }
}
