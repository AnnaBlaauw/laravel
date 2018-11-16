@extends('layouts.app')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- hier stond eerst de styles -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            @section('content')
            <h1> home vd tutorial</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At sunt velit minima ad consequuntur. Praesentium, commodi. Voluptatem, unde sed iste possimus in eaque odio alias nemo eos fuga voluptatibus asperiores. 
            @endsection


            <div class="content">
                <div class="title m-b-md">
                    Welcome to Happy Home, the indoor plant community. 
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Community</a>
                    <a href="https://laracasts.com">Maintenance</a>
                    <a href="https://laravel-news.com">Plant Of The Day</a>
            
                </div>
            </div>
        </div>
    </body>
</html>
