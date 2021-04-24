@extends('layouts.app', ['admin'=>true])

@section('title', 'HOME')

@section('adminIndex')



<div>
    <div id="main"> 
        @include('reusable.caption', ['title'=>'dashboard'])
        <div class="grid grid-cols-1 md:grid-cols-3 mt-11 px-11 place-items-center">
            
            @include('reusable.manageCard', ['title'=>'Users', 'url' => 'users', 'icon' => 'fas fa-users'])
           
            @include('reusable.manageCard', ['title'=>'Movies', 'url' => 'movies', 'icon' => 'fas fa-video'])
        

            @include('reusable.manageCard', ['title'=>'Cinemas', 'url' => 'cinemas', 'icon' => 'fas fa-film'])

        </div>

        @include('reusable.caption', ['title'=>'statistics'])
        <div class="grid grid-cols-1 md:grid-cols-3 mt-11 px-11 place-items-center">
            
            @include('reusable.card', ['title'=> 'Registered users', 'data'=> $registeredUsers, 'icon'=>"fas fa-users text-white mt-4"])
            
            @include('reusable.card', ['title'=> 'Added movies','data'=>$addedMovies, 'icon'=>"fas fa-video text-white mt-4"])

            @include('reusable.card', ['title'=> 'Added cinemas','data'=>$addedCinemas, 'icon'=>"fas fa-film text-white mt-4"])
            
        </div>

        @include('reusable.caption', ['title'=>'last records'])

        <div class="grid grid-cols-1 md:grid-cols-3 mt-11 px-11 place-items-center mb-10">
            
            @include('reusable.card', ['title'=> 'Last Register User', 'data'=> $lastRegistered->username, 'icon'=>"fas fa-users text-white mt-4"])
            
            @include('reusable.card', ['title'=> 'Last Added Movie','data'=>$lastMovie->mName, 'icon'=>"fas fa-video text-white mt-4"])

            @include('reusable.card', ['title'=> 'Last Added Cinema','data'=>$lastCinema->cName, 'icon'=>"fas fa-film text-white mt-4"])

            
        </div>

    </div>


   

</div>

@endsection