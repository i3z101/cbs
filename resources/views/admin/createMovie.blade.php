@extends('layouts.app', ['admin'=>true])

@section('title', 'CREATE')

@section('createMovie')

@include('reusable.caption', ['title'=>'create movie'])

<div id="main">

    @include('reusable.movieForm', ['update'=>false])

    @if($errors->any())
        @if($errors->any())
            @include('reusable.formErrors', ['errors'=>$errors])
        @endif
    @endif

</div>


@endsection