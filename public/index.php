<?php

use App\Core\Core;
use App\Http\Route;

require_once '../vendor/autoload.php';
require_once '../src/routes/api.php';

Core::dispatch(Route::routes());
