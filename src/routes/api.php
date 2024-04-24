<?php

use App\Http\Route;

Route::post('/validate-password', 'PasswordController@secure');
