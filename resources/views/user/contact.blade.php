@extends('layouts.app', ['admin'=>false])

@section('title', 'CONTACT')

@section('contact')

<div id="main">
    @include('reusable.caption', ['title'=>'contact'])
    <img src="{{asset('images/logo.png')}}" class="m-auto" alt="logo" width="200">
    <p class="text-gray-200 font-body text-xl md:text-2xl text-center mb-5">You can find us over there:</p>
    <div class="grid grid-cols-2 md:grid-cols-4 md:w-4/5 m-3 md:px-48 mt-20 mb-20 md:m-auto">
        <a href="mailto:ab.ah.bq@gmail.com?subject= Enquiry&body= I have an enquiry which is [your enquiry here]" class="text-yellow-300 font-body md:text-2xl mb-5 text-center"> @ab.ah.bq@gmail.com </a>
        <a href="tel:0533813106" class="text-yellow-300 font-body md:text-2xl text-lg text-center md:ml-14 md:w-10"> 0533813106 </a>
        <a href="https://wa.me/+966533813106" class="text-yellow-300 font-body text-center md:ml-0 md:text-2xl text-lg"> Whatsapp </a>
        <address class="text-yellow-300 font-body text-lg md:text-2xl text-center">
           <a href="https://goo.gl/maps/TxZuBxB9FeQtjN4eA" target="_blank">KSA-RIYADH - Alyasamin distric</a>
        </address>
    </div>
</div>
    
@endsection