<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLogin extends Controller
{
    public function loginPage(){
        return view('admin.login');
    }    
}
