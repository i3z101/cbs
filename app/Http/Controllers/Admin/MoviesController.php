<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MovieValidation;
use App\Models\Cinema;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class MoviesController extends Controller
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
        $movies= Movie::all();
        return view('admin.movies', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createMovie')->with('cinemas', Cinema::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createMovieValidation= new MovieValidation();
        $request->validate($createMovieValidation->rules(true));
        $newPosterName= uniqid() . "_" . $request->mName . "." . $request->mPoster->extension();

        
        Movie::create([
            'mName'=>$request->input('mName'),
            'mGenre'=>json_encode($request->input('mGenre')),
            'mPoster'=>$newPosterName,
            'mDesc'=>$request->input('mDesc'),
            'mCreator'=>$request->input('mCreator'),
            'mGuide'=>$request->input('mGuide'),
            'mRating'=>$request->input('mRating'),
            'mTime'=>json_encode($request->input('mTime')),
            'cinemaId'=>$request->input('cinema')
        ]);

        $request->mPoster->move(public_path('posters'), $newPosterName);

        return redirect('/admin/movies')->with('message', 'Movie has been created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.moviePoster')->with('poster', Movie::where('mId', $id)->get('mPoster')->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.editMovie', [
            'movie' => Movie::where('mId',$id)->first(),
            'cinemas'=>Cinema::all()
        ]);
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
        $updateMovieValidation= new MovieValidation();
        $request->validate($updateMovieValidation->rules(false));
        Movie::where('mId', $id)
              ->update([
                  'mName'=> $request->input('mName'),
                  'mDesc'=> $request->input('mDesc'),
                  'mCreator'=> $request->input('mCreator'),
                  'mGuide' => $request->input('mGuide'),
                  'mGenre' => json_encode($request->input('mGenre')),
                  'mTime'  => json_encode($request->input('mTime'))
              ]);
        return redirect('/admin/movies')->with('message', 'Movie has been updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::where('mId', $id)->delete();
        return redirect('/admin/movies')->with('message', 'Movie has been deleted successfully');
    }
}
