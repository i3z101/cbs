@extends('layouts.app', ['admin'=>true])

@section('title', 'MOVIES')

@section('movies')
    <div id="main">
        @include('reusable.caption', ['title'=>'movies'])
        @if(session()->has('message'))
            <div class="text-white bg-green-600 rounded-lg w-3/5 p-3 mb-3 mt-5 m-auto text-center text-lg" id="message">
            <p>{{session()->get('message')}}</p> 
            </div>
        @endif
        <div class="rounded-lg text-gray-200 ml-14 mt-5 border border-yellow-300 w-32 p-3 text-center hover:bg-yellow-300 hover:text-gray-800 transition-all duration-200">
            <a href="/admin/movies/create">Create movie</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 p-5 place-items-center mt-5 mb-5 ">
            @forelse ($movies as $movie )
            <div class="border border-yellow-300 rounded-lg ml-2 shadow-lg flex flex-row mb-4 md:mb-0">
                <div class="text-gray-200 p-5 w-full relative">
                    <div class="flex flex-row justify-between items-center">
                        <h3 class="text-xl md:text-3xl text-red-600 font-body mb-3">{{$movie->mName}}</h3> 
                        <p class="text-xl md:text-3xl text-gray-200 font-body mb-3">{{$movie->mGuide}}</p>
                    </div>
                    <p class="text-lg md:text-xl  user-text-style">{{$movie->mDesc}}</p>
                    <p class="text-lg md:text-2xl text-red-600 font-body">{{$movie->mCreator}}</p>
                    <div class="grid grid-cols-4 mb-2 -row w-full justify-around items-center">
                        @for ($i=0; $i < count(json_decode($movie->mGenre)); $i++)
                        <p  class="text-white font-body mr-3 mb-1 mt-1 text-sm md:size">
                            {{json_decode($movie->mGenre)[$i]}}
                        </p>
                        @endfor
                    </div>
                    <div class="grid grid-cols-3 md:grid-cols-4 justify-around items-center">
                        @for ($i=0; $i < count(json_decode($movie->mTime)); $i++)
                        <p class="text-red-600 font-body text-sm md:text-lg">{{json_decode($movie->mTime)[$i]}}
                            <span class="text-sm">{{json_decode($movie->mTime)[$i][0]. "" . json_decode($movie->mTime)[$i][1] > 12 ? "PM" : "AM"}}</span>
                        </p>
                        @endfor
                    </div>
                </div>
                <div class="border-l-2 border-yellow-300 mt-5 mb-5">

                </div>
                <div class="text-gray-200 p-7">
                    <div class="bg-green-600 btn-style">
                        <a href="/admin/movies/{{$movie->mId}}/edit" >Edit</a>
                    </div>
                    <div class="bg-blue-600 btn-style">
                        <a href="/admin/movies/{{$movie->mId}}" >poster</a>
                    </div>
                    <form action="/admin/movies/{{$movie->mId}}" method="POST" class="bg-red-600 btn-style">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="outline-none focus:outline-none">Delete</button>
                    </form>
                </div>
            </div>
        
            @empty
                <p class="text-white">No movies found</p>
            @endforelse
        </div>
    </div>
@endsection