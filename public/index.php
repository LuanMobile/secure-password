<?php

use App\Core\Core;
use App\Http\Route;

require_once '../vendor/autoload.php';
require_once '../src/routes/api.php';
/* $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); */

Core::dispatch(Route::routes());
