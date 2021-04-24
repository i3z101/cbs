@extends('layouts.app', ['admin'=>false])

@section('title', 'CINEMAS')

@section('cinemas')

<div id="main">

    @include('reusable.caption', ['title'=>'cinemas'])

    <div class="grid md:grid-cols-4 grid-cols-1 p-10">
        @foreach ($cinemas as $cinema)
            <div class="border border-yellow-300 grid grid-cols-1 mb-4 md:mb-0 p-5 ml-8">
                <p class="text-center text-yellow-300 text-lg md:text-3xl font-body mt-3">{{$cinema->cName}}</p>
                <p class="text-center text-gray-200 text-lg font-body mt-3">{{$cinema->cOperation}}</p>
                <div class="grid grid-cols-2 m-auto mb-4 md:grid-cols-4 gap-5 mt-7 md:ml-0 w-full place-items-center">
                    @for($i=0; $i<count(json_decode($cinema->cBranches)); $i++)
                        <p class="times border border-gray-100 p-2 font-body text-xl rounded-md text-yellow-300">
                            {{json_decode($cinema->cBranches)[$i]}}
                        </p>
                    @endfor
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection