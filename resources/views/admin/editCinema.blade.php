@extends('layouts.app', ['admin'=>true])

@section('title', 'EDIT CINEMA')

@section('editCinema')

<div class="main">
    @include('reusable.caption', ['title'=>'edit cinema'])

    @include('reusable.cinemaForm', ['update'=>true, 'cinema'=>$cinema])

    @if($errors->any())
        @include('reusable.formErrors', ['errors'=>$errors])
    @endif
</div>
    
@endsection