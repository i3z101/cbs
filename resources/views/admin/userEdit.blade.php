@extends('layouts.app', ['admin'=>true])

@section('title', 'EDIT')

@section('editUsers')
    @include('reusable.caption', ['title'=>'EDIT'])
    <div class="flex flex-col" id="main">
        @include('reusable.userForm', [
            'admin' => true,
            'id' =>$user->id,
            'username' =>$user->username,
            'email' => $user->email,
            'userPhone' => $user->userPhone
        ])
        @if($errors->any())
            @if($errors->any())
                @include('reusable.formErrors', ['errors'=>$errors])
            @endif
        @endif
    </div>
@endsection