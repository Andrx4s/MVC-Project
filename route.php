<?php

use Controllers\MainController;
use Controllers\UserController;

Route::get('/', [MainController::class, 'index']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerPost']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginpost']);

Route::get('/category', [UserController::class, 'category']);
Route::post('/category', [UserController::class, 'categorypost']);

Route::get('/categoryread', [UserController::class, 'categoryread']);

Route::post('/categoryread', [UserController::class, 'delete']);

Route::post('/categoryread', [UserController::class, 'update']);