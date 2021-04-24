@extends('layouts.app', ['admin'=>true])

@section('title', 'ADD CINEMA')

@section('addCinema')

<div class="main">
    @include('reusable.caption', ['title'=>'add cinema'])

    @include('reusable.cinemaForm', ['update'=>false])

    @if($errors->any())
        @include('reusable.formErrors', ['errors'=>$errors])
    @endif
</div>
    
@endsection