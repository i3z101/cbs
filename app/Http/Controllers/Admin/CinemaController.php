<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CinemaValidation;
use App\Models\Cinema;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CinemaController extends Controller
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
        $cinemas= Cinema::orderBy('created_at', 'ASC')->get();
  
        return view('admin.cinemas', [
            'cinemas' => $cinemas
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addCinema');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addCinemaValidation= new CinemaValidation();
        $request->validate($addCinemaValidation->rules());
        $branches= explode(" ",$request->cBranches);
        Cinema::create([
            'cName'=>$request->input('cName'),
            'cAddress'=>$request->input('cAddress'),
            'cOperation'=>$request->input('cOperation'),
            'cBranches'=>json_encode($branches),
            'cRating'=>$request->input('cRating')
        ]);
        
        return redirect('/admin/cinemas')->with('message', 'Cinema has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.editCinema')->with('cinema', Cinema::where('cId', $id)->first());
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
        $editCinemaValidation= new CinemaValidation();
        $request->validate($editCinemaValidation->rules());
        $branches= explode(" ",$request->cBranches);
        Cinema::where('cId',$id)
              ->update([
                'cName'=>$request->input('cName'),
                'cAddress'=>$request->input('cAddress'),
                'cOperation'=>$request->input('cOperation'),
                'cBranches'=>json_encode($branches),
                'cRating'=>$request->input('cRating')
            ]);
        
        return redirect('/admin/cinemas')->with('message', 'Cinema has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cinema::where('cId', $id)->delete();
        return redirect('/admin/cinemas')->with('message', 'Cinema has been deleted successfully');
    }
}
