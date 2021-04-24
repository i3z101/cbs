@extends('layouts.app', ['admin'=>true])

@section('title', 'EDIT')

@section('editMovie')
    
    <div id="main">
        @include('reusable.caption', ['title'=>'edit movie'])

        @include('reusable.movieForm', [
            'mId' =>$movie->mId,
            'name'=>$movie->mName,
            'description'=>$movie->mDesc,
            'creator' => $movie->mCreator,
            'guide' => $movie->mGuide,
            'movieGenres' => json_decode($movie->mGenre),
            'movieTimes'=>json_decode($movie->mTime),
            'cinemaId'=>$movie->cinemaId,
            'cinemas'=>$cinemas,
            'update'=>true
        ])

        @if($errors->any())
            @include('reusable.formErrors', ['errors'=>$errors])
        @endif

    </div>

@endsection