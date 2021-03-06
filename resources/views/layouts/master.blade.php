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
<body class="container">
<div id="body-content">
    <header>
        {{--<div class="container">--}}
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
        {{--</div>--}}
    </header>

    <div class="col-xs-12" id="main-content">
        @yield('content')
    </div>

    <footer class="col-xs-12">
        <ul class="col-xs-8 col-xs-offset-2">
            <li class="col-xs-3"><a href="/home">Mission Statement</a></li>
            <li class="col-xs-3"><a href="/games">Games</a></li>
            <li class="col-xs-3"><a href="/staff">About Us</a></li>
            <li class="col-xs-3"><a href="/contact">Contact</a></li>
        </ul>
        <p class="col-xs-12" id="copyright">
            Logic Development Studios <i class="fa fa-copyright"></i> {{\Carbon\Carbon::now()->year}}
        </p>
    </footer>
</div>
</body>
</html>
