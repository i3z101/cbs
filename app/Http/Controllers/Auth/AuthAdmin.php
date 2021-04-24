<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthAdmin extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'userType' => 0])){
            $request->session()->regenerate();
            return redirect('/admin');
        }else{
            return redirect('/admin/login');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/admin/login');
    }

}
