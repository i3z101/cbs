<?php

use App\Http\Controllers\User\UserCinemas;
use App\Http\Controllers\User\UserMovies;
use App\Http\Controllers\User\UserPages;
use App\Http\Controllers\User\UserTicket;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
|
| 
|
*/


Route::resource('movies', UserMovies::class);

Route::resource('cinemas', UserCinemas::class);

Route::get('/', [UserPages::class, 'index']);

Route::get('/contact', [UserPages::class, 'contact']);

Route::get('/complete-payment', [UserTicket::class, 'completePayment']);

Route::post('/complete', [UserTicket::class, 'complete']);

