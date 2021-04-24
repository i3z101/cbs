@extends('layouts.app', ['admin'=>true])

@section('title', 'POSTER')

@section('showPoster')

<div id="main">

    <div class="p-14">
        <img src="{{asset('posters/' . $poster->mPoster)}}" width="500" class="m-auto"/>
    </div>
   

</div>
    
@endsection