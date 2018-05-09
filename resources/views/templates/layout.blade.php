<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        @yield('pagecss')
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                Message Wall
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarcollapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{ route('addMessage') }}">Add Message</a>
                    <a class="nav-item nav-link" href="#">Login</a>
                    <ul class="nav justify-content-end" style="display:none">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script type="application/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="application/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    @yield('pagejs')
</html>