@extends('layouts.app', ['admin'=>true])

@section('title', 'CINEMAS')

@section('cinemas')

<div id="main">

    @include('reusable.caption', ['title'=>'cinemas'])
    @if(session()->has('message'))
    <div class="text-white bg-green-600 rounded-lg w-3/5 p-3 mb-3 mt-5 m-auto text-center text-lg" id="message">
    <p>{{session()->get('message')}}</p> 
    </div>
    @endif
    <div class="rounded-lg text-gray-200 ml-14 mt-5 border border-yellow-300 w-32 p-3 text-center hover:bg-yellow-300 hover:text-gray-800 transition-all duration-200">
        <a href="/admin/cinemas/create">Add cinema</a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 p-5 place-items-center mt-5 mb-5">
        @forelse ($cinemas as $cinema )
        <div class="border border-yellow-300 rounded-lg shadow-lg flex flex-row mb-4 md:mb-0">
            <div class="text-gray-200 p-5 w-full relative">
                <h3 class="text-xl md:text-3xl text-red-600 font-body mb-3">{{$cinema->cName}}</h3> 
                <p class="text-xl md:text-3xl text-gray-200 font-body mb-3">{{$cinema->cAddress}}</p>
                <p class="text-lg md:text-xl user-text-style">{{$cinema->cOperation}}</p>
                <div class="grid grid-cols-2 w-full justify-around items-center">
                    @for ($i=0; $i < count(json_decode($cinema->cBranches)); $i++)
                    <p  class="text-white font-body mr-3 mb-1 mt-1 text-sm md:size">
                        {{json_decode($cinema->cBranches)[$i]}}
                    </p>
                    @endfor
                </div>
            </div>
            <div class="border-l-2 border-yellow-300 mt-5 mb-5">

            </div>
            <div class="text-gray-200 p-7">
                <div class="bg-green-600 btn-style">
                    <a href="/admin/cinemas/{{$cinema->cId}}/edit" >Edit</a>
                </div>
                <form action="/admin/cinemas/{{$cinema->cId}}" method="POST" class="bg-red-600 btn-style">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="outline-none focus:outline-none">Delete</button>
                </form>
            </div>
        </div>

        @empty
            <p class="text-white">No cinemas found</p>
        @endforelse
    </div>
    </div>

@endsection