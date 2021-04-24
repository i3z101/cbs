@extends('layouts.app', ['admin'=>false])

@section('title', 'HOME')

@section('userIndex')

    <div id="main">

     @include('components.slideShow')

     
     <div class="grid grid-cols-1 md:grid-cols-2 place-items-center p-20">
        <img src="{{asset('images/movie_night.png')}}" alt="movie night" width="450">
        <div class="mt-5 md:mt-0">
            <p class="text-white font-body text-3xl md:text-4xl text-center">Choose your movie night</p>
        </div>
     </div>

     <div class="grid grid-cols-1 md:grid-cols-2 place-items-center p-20">
        <div class="mb-5 md:mb-0">
            <p class="text-white font-body text-3xl text-center md:text-4xl">Any time, Any where</p>
        </div>
        <img src="{{asset('images/movies (1).png')}}" alt="movie night" width="450">
     </div>

     <div class="grid grid-cols-1 md:grid-cols-2 place-items-center p-20">
        <img src="{{asset('images/seats.png')}}" alt="movie night" width="450">
        <div class="mt-5 md:mt-0">
            <p class="text-white font-body text-3xl text-center md:text-4xl">We take care of your entertainment</p>
        </div>
     </div>
 
     <div class="border border-yellow-300 p-4 hover:bg-yellow-300 m-auto text-center font-body md:text-3xl text-xl mb-10 transition-all duration-200 text-gray-200 hover:text-gray-700 rounded-md md:w-72 w-48">
        <a href="/movies"> Browsing movies now </a>
    </div>
    </div>
@endsection