<?php

use Core\Route;
use App\Controllers\IndexController;
use App\Controllers\LoginController;

(new Route())
    ->get('/', IndexController::class)
    ->get('/login', [LoginController::class, 'index'])
    ->post('/login', [LoginController::class, 'login'])
    ->run();

die();