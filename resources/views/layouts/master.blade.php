<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LogicDS - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<div>
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@if (Auth::check())--}}
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ url('/login') }}">Login</a>--}}
                {{--<a href="{{ url('/register') }}">Register</a>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--@endif--}}

    <header>
        <div class="container">
            <h1><a href="/home">Logic Development Studios</a></h1>
            <nav class="navbar navbar-default" id="mainNavigation">
                <div class="container-fluid">
                    <ul class="navbar-nav nav">
                        <li><a href="/home">Home</a></li>
                        <li><a href="/games">Games</a></li>
                        <li><a href="/staff">Staff</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container" id="main-content">
        @yield('content')
    </div>
</div>
</body>
</html>
