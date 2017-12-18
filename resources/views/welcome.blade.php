<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Code Center Coming Soon</title>

        <link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css" media="screen" /> 
        <link href="{{ url('css/font-awesome.css') }}" type="text/css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">

       <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">

    </head>
    <body>


    <div class="transy"></div>
    <!-- <div class="">
                     @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/codecenter') }}">Only Available page</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        <a href="{{ url('/codecenter') }}">Only Available page</a>
                    @endauth
                </div>
            @endif
    </div> -->
    <div class="wrapper">
        <div class="centered">

            <div class="header">

                <h1 id="logo">Code Center</h1>
                <p class="line1">- design & development -</p>
            </div>
            
            <div class="content">
                <p>we are working on something very interesting!</p>
                <p>it will be ready soon.</p>
            </div>
            
            
            <div class="social">
            <p>
                <a href="#"><span class="socicon-pinterest"></span></a>
                <a href="#"><span class="socicon-instagram"></span></a>
                <a href="#"><span class="socicon-twitter"></span></a>
                <a href="#"><span class="socicon-facebook"></span></a>
            </p>
            </div>
        </div>
    </div>

    </body>
</html>
