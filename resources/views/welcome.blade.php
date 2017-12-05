<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Games for U</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #c1e2b3;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .top-left > img {
                height: 200px;
                width: 400px;
            }

            .content {
                width: 1000px;
                height: 450px;
                position: fixed;
                top:50%;
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > p {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            footer {
                background-color: orangered;
                color: black;
                font-size: larger;
                position: absolute;
                text-align: center;
                width: 100%;
                bottom: 0px;
                padding-bottom: 16px;
                padding-top: 16px;
                font-weight: 900;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="top-left">   
            <img src="/images/LaravelLogo.png">
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        @can('sub_only',Auth::User())
                        <a href="{{url('/sub')}}"> Subscriber</a>
                            @endcan
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Play Ground
                </div>

                <div class="links">
                    <p> The place for games </p>
                    <button type="button" class="btn btn-primary"> <a href="{{ route('header.main')  }}" type="button" class="btn btn-default">Our Games</a></button>
                </div>
            </div>
        </div>

    </body>
</html>
