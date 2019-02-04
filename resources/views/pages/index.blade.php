<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="assets/logo_musicnator.ico" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Musicnator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: #fff;
                font-family: Verdana, Geneva, Tahoma, sans-serif
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('assets/slayer.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }


            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {

                font-family: monospace;
                margin-bottom: 30px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a style="font-family:monospace" href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MusicNator
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Artists</a>
                    <a href="https://laracasts.com">Projects</a>
                    <a href="https://laravel-news.com">Studios</a>
                    <a href="https://forge.laravel.com">Events</a>
                    <a href="https://nova.laravel.com">News</a>
                    <a href="https://forge.laravel.com">Practice areas</a>
                </div>

            </div>
        </body>
    </div>
</html>
