@extends('layouts.app', ['admin'=>true])

@section('title', 'LOGIN')


@section('login')

<div id="main">
    @include('reusable.caption', ['title'=>'login'])

    <form action="/admin/login" method="POST" class="flex flex-col w-1/2 m-auto mt-10">
        @csrf
        <input type="email" name="email" placeholder="Email" class="user-input-style">
        <input type="password" name="password" placeholder="Password" class="user-input-style">
        @include('reusable.formButton', ['btnText'=>'Login'])
    </form>

</div>
    
@endsection