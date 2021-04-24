<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserPages extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function contact(){
        return view('user.contact');
    }
}
