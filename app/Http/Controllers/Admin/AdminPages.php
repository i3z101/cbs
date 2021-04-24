<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cinema;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminPages extends Controller
{
    public function __construct()
    {
        $this->middleware('adminAuth'); //DON'T FORGET TO CALL EXCEPT METHOD FOR LOGOUT
    }
    public function index(){
        $registeredUsers= User::where('userType', '!=' , 0)
                               ->count();
        $lastRegistered= User::orderBy('created_at', 'DESC')
                               ->where('id','!=', 0)
                               ->get('username')
                               ->first();

        $addedMovies= Movie::count();
        $lastMovie= Movie::orderBy('created_at', 'DESC')
                               ->get('mName')
                               ->first();
        $addedCinemas= Cinema::count();
        $lastCinema= Cinema::orderBy('created_at', 'DESC')
                                ->get('cName')
                                ->first();

        return view('admin.index', [
            'registeredUsers' => $registeredUsers,
            'lastRegistered'  => $lastRegistered,
            'addedMovies'     => $addedMovies,
            'lastMovie'       => $lastMovie,
            'addedCinemas'    => $addedCinemas,
            'lastCinema'      => $lastCinema

        ]);
    }
}
