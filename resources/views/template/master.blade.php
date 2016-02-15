<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon"/>
    <title>@yield('title','Reviews Sri Lanka')</title>

    <link href="{{url('contents/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('contents/css/styles.css')}}" rel="stylesheet">
    <link href="{{url('contents/css/rate.css')}}" rel="stylesheet">
    @yield('styles')


    <script src="{{url('contents/js/jquery.min.js')}}"></script>
    <script src="{{url('contents/js/bootstrap.js')}}"></script>
    <script src="{{url('contents/js/rate.js')}}"></script>
    @yield('scripts')

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="{{url('')}}"><img src="{{url('contents/images/logo.png')}}"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                    <li><a href="{{url('logout')}}">Logout</a></li>
                @else
                    <li><a href="{{url('register')}}">Register</a></li>
                    <li><a href="{{url('login')}}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>

</body>
</html>