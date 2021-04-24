<?php

use App\Http\Controllers\Admin\AdminLogin;
use App\Http\Controllers\Admin\AdminPages;
use App\Http\Controllers\Admin\CinemaController;
use App\Http\Controllers\Admin\MoviesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\AuthAdmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| 
|
*/


Route::resource('users', UsersController::class);

Route::resource('movies', MoviesController::class);

Route::resource('cinemas', CinemaController::class);

Route::get('/', [AdminPages::class, 'index']);

Route::get('/login', [AdminLogin::class, 'loginPage']);

Route::get('/logout', [AuthAdmin::class, 'logout']);

Route::post('/login', [AuthAdmin::class, 'login']);


