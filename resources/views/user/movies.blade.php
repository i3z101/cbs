@extends('layouts.app', ['admin'=>false])

@section('title', 'MOVIES')

@section('showMovies')
    <div id="main">
        @include('reusable.caption', ['title'=>'movies'])
        @if(session()->has('message'))
            <div class="text-white bg-green-600 rounded-lg w-3/5 p-3 mb-3 mt-5 m-auto text-center text-lg" id="message">
            <p>{{session()->get('message')}}</p> 
            </div>
        @endif
        <div class="grid md:grid-cols-4 grid-cols-1 p-10">
            @foreach ($cinemas as $cinema)
                @foreach ($cinema->movie as $movie)
                    <div class="border border-yellow-300 grid grid-cols-1 mb-4 md:mb-0 p-5 ml-3 md:ml-8">
                        <img src="{{asset('posters/' . $movie->mPoster)}}" class="m-auto" alt="" width="120">
                        <div>
                            <div class="grid grid-cols-2">
                                <p class="text-center text-yellow-300 text-3xl font-body">{{$movie->mName}}</p>
                                <p class="text-center text-gray-200 text-lg font-body mt-3">By - {{$movie->mCreator}}</p>
                            </div>
                            
                            <p class="text-center text-gray-200 text-lg font-body mt-3">Shown in <span class="text-yellow-300">{{$cinema->cName}}</span></p>
                            <div class="border border-yellow-300 mt-3 p-2 font-body text-center text-lg rounded-lg text-gray-200 hover:bg-yellow-300 hover:text-gray-700 transition-all duration-200">
                                <a href="/movies/{{$movie->mId}}">Book</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>    
@endsection