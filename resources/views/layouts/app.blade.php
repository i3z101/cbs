<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>@yield('title')</title>
</head>
<body class="bg-black p-0 m-0">

    @if($admin)
        @include('layouts.nav', ['admin'=>true])
        
            @yield('login')
        
        
            @yield('adminIndex')
        
        
            @yield('users')
        
        
            @yield('editUsers')
        
        
            @yield('movies')
        
        
            @yield('createMovie')
        
        
            @yield('editMovie')
        
        
            @yield('showPoster')
        
        
            @yield('cinemas')
        
        
            @yield('addCinema')
        
        
            @yield('editCinema')
        
    @else
     @include('layouts.nav', ['admin'=>false])

        @yield('userIndex')

        @yield('showMovies')
        
        @yield('showMovie')

        @yield('cinemas')

        @yield('contact')

        @yield('payment')
    @endif
    @include('layouts.footer')

    
    

    <script src="/js/app.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  <script>
    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-purple-800");
            $("#sButton2").addClass("bg-purple-800");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-purple-800");
            $("#sButton1").addClass("bg-purple-800");
           
        cont=0;
        
        break;
        }
        
        
        }},6000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-yellow-300");
    $("#sButton1").addClass("bg-yellow-300");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-yellow-300");
    $("#sButton2").addClass("bg-yellow-300");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-purple-800");
        

        loopSlider();
     
        
    
    
    
    
    });

  
  </script>
</body>
</html>