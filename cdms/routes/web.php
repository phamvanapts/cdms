<?php

use App\Controllers\AuthController;
use App\Controllers\UserController;
use App\Middleware\AuthMiddleware;
use App\Middleware\AdminMiddleware;

$router = new App();

// Authentication routes
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'authenticate']);
$router->get('/register', [AuthController::class, 'register']);
$router->post('/register', [AuthController::class, 'store']);
$router->post('/logout', [AuthController::class, 'logout']);

// User routes
$router->get('/users', [UserController::class, 'index'])->middleware(AuthMiddleware::class);
$router->get('/users/create', [UserController::class, 'create'])->middleware(AuthMiddleware::class);
$router->post('/users', [UserController::class, 'store'])->middleware(AuthMiddleware::class);
$router->get('/users/edit/{id}', [UserController::class, 'edit'])->middleware(AuthMiddleware::class);
$router->post('/users/update/{id}', [UserController::class, 'update'])->middleware(AuthMiddleware::class);
$router->post('/users/delete/{id}', [UserController::class, 'delete'])->middleware(AdminMiddleware::class);