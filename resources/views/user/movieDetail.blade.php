@extends('layouts.app', ['admin'=>false])

@section('title', $movie->mName)


@section('showMovie')

<div id="main" class="relative">
    <div id="main2">
        @include('reusable.caption', ['title'=>$movie->mName])

        <div class="grid grid-cols-1 md:grid-cols-2">
            @foreach ($cinemas as $cinema)
                @foreach ($cinema->movie as $mov)
                    @if($mov->mId == $movie->mId)
                    <img src="{{asset('posters/'. $mov->mPoster)}}" width="450" class="p-20"/>
                    <div class="mt-0 md:mt-24">
                        <p class="text-gray-200 font-body text-2xl text-center md:text-left md:text-4xl md:w-4/5">{{$mov->mDesc}}</p>
                        <p class="text-gray-200 font-body text-center md:text-left text-xl md:text-2xl md:w-4/5 mt-10 mb-10">You can watch {{$mov->mName}} At <a href="/cinams/{{$cinema->cId}}" class="text-yellow-300 text-4xl"> {{$cinema->cName}} </a> Now </p>
                        <p class="text-gray-200 font-body text-lg ml-10 md:ml-0 -mb-6">Select the time</p>
                        <div class="grid grid-cols-2 m-auto mb-4 md:grid-cols-4 gap-5 mt-7 md:ml-0 w-4/5 cursor-pointer text-center">
                            @for($i=0; $i<count(json_decode($mov->mTime)); $i++)
                                <p class="times border border-gray-100 p-2 font-body text-xl rounded-md text-yellow-300">
                                    {{json_decode($mov->mTime)[$i]}} <span class="text-sm">{{json_decode($mov->mTime)[$i][0]. "" . json_decode($mov->mTime)[$i][1] > 12 ? "PM" : "AM"}}</span>
                                </p>
                            @endfor
                        </div>
                        <button class="hidden flex-row justify-between items-center border border-yellow-300 text-gray-200 w-64 rounded-md mt-10 mb-5 md:mb-0 md:mt-20 m-auto md:ml-20 p-3 cursor-pointer" id="completeBtn">
                            <p class="text-2xl font-body">Pay <strong></strong></p>
                            <div>
                                <i class="fas fa-arrow-right text-2xl "></i>
                            </div>
                        </button>
                    </div>
                    @endif
                @endforeach
                
            @endforeach
        </div>
    </div>
    @if($errors->any())
       <span id="isError"></span>
    @endif
    @foreach ($cinemas as $cinema)
      @if($cinema->cId == $movie->cinemaId)
        <div class="absolute top-0 left-36">
            @include('components.modal', [
                'movieName' => $movie->mName,
                'cinemaName'=> $cinema->cName
            ])
        </div>
      @endif
    @endforeach
</div>


    
@endsection