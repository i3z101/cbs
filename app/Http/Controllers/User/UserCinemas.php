<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\User\UserMovies;
use App\Models\Cinema;
use Illuminate\Http\Request;

class UserCinemas extends UserMovies
{
    public function index()
    {
        return view('user.cinemas', ['cinemas'=>Cinema::all()]);
    }
}
