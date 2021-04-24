@extends('layouts.app')

@section('title' , 'USERS')

@section('users')

<div>
    <div id="main">
        @include('reusable.caption', ['title'=>'users'])
        @if(session()->has('message'))
            <div class="text-white bg-green-600 rounded-lg w-3/5 p-3 mt-5 m-auto text-center text-lg" id="message">
               <p>{{session()->get('message')}}</p> 
            </div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-4 place-items-center mt-5 mb-5">
        @forelse ($users as $user)
               <div class="border border-yellow-300 w-4/5 rounded-lg shadow-lg flex flex-row mb-4 md:mb-0">
                    <div class="text-gray-200 p-5 w-full relative">
                        <h3 class="text-xl md:text-3xl text-red-600 font-body mb-3">{{$user->username}}</h3>
                        <p class="text-lg md:text-xl user-text-style email-width">{{$user->email}}</p>
                        <p class="text-lg md:text-xl user-text-style">{{$user->userPhone}}</p>
                        <p class="text-lg md:text-2xl user-text-style">Type: <span class="text-red-600">REGULAR<span></p>
                    </div>
                    <div class="border-l-2 border-yellow-300 mt-5 mb-5">

                    </div>
                    <div class="text-gray-200 p-7">
                        <div class="bg-green-600 btn-style">
                            <a href="/admin/users/{{$user->id}}/edit" >Edit</a>
                        </div>
                        <form action="/admin/users/{{$user->id}}" method="POST" class="bg-blue-600 btn-style">
                            @csrf
                            @method('PATCH')
                            <button type="submit">Terminate</button>
                        </form>
                        <form action="/admin/users/{{$user->id}}" method="POST" class="bg-red-600 btn-style">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="outline-none focus:outline-none">Delete</button>
                        </form>
                    </div>
               </div>
            
        @empty
            <p class="text-white">NO USERS FOUND</p>
        @endforelse
       </div>


    </div>

</div>


@endsection