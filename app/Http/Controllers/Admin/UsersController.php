<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserValidation;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminAuth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users', ['admin'=>true, 'users'=> User::where('userType', '!=', 0)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return redirect('/admin/users')->with('message', 'TESTYSHB');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        return view('admin.userEdit')->with('user', User::where('id', $id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userValidation= new UserValidation();
        $request->validate($userValidation->rules());
        
        User::where('id', $id)
            ->update([
            'username' => $request->input('username'),
            'email'=>$request->input('email'),
            'userPhone'=>$request->input('userPhone'),
            'userType'=>$request->input('userType')
        ]);

        return redirect('/admin/users')->with('message', 'User information has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)
             ->delete();

        return redirect('/admin/users')->with('message', 'User with id ' . $id . ' has been deleted successfully');
    }
}
