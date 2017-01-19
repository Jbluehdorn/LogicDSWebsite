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

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="container">
<div id="body-content">
    <header>
        <h1><a href="/admin">Logic Development Studios</a></h1>
        <nav class="navbar navbar-default" id="mainNavigation">
            <div class="container-fluid">
                <ul class="navbar-nav nav">
                    <li><a href="/admin">Home</a></li>
                    @if(Auth::user())
                    <li><a href="/admin/account/{{Auth::User()->id}}">Account</a></li>
                    @if(Auth::user()->isAdmin)
                    <li><a href="/admin/new">New User</a></li>
                    @endif
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::user())
                    <li><a href="/admin/logout"><i class="fa fa-power-off" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    <div class="col-xs-12" id="main-content">
        @yield('content')
    </div>

    <footer class="col-xs-12">
        <p class="col-xs-12" id="copyright">
            Logic Development Studios &copy; {{\Carbon\Carbon::now()->year}}
        </p>
    </footer>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
