@extends('layouts.app', ['admin'=>false])

@section('title', 'PAYMENT')

@section('payment')

<div id="main">
    @include('reusable.caption', ['title'=>'payment'])
    @include('components.payment', ['amount'=>$amount])
   
</div>
    
@endsection