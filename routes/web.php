<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/post', [PostController::class, 'show']);
Route::get('/user', [UserController::class, 'show']);
?>