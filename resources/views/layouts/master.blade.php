<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    </head>
    <body>
        <div class="position-ref">
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

            <div class="content">
                <div class="title m-b-md text-primary">
                    {{ config('app.name') }}
                </div>

                <div class="links">
                    <a href="{{ route('welcome') }}">Welcome</a>
                    <a href="{{ route('blog') }}">Blog</a>
                </div>
            </div>
        </div>
        <main>
            <div class="container">
                <hr>
                @yield('content')
            </div>
        </main>
        <footer>
            <hr>
            <p>All Right Reserved. &copy; 2019. Developed by <a class="red no-dec" href="http://github.com/aliadhillon" target="_black"><strong>Ali A. Dhillon</strong></a></p>
        </footer>
    </body>
</html>
