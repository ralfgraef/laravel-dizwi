<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-DiZwi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="shortcut icon" href="https://www.fes.de/favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <style>
            html, body {
                background: url('images/hintergrund.jpg') no-repeat center center fixed;
                background-size: cover;
                color: #efefef;
                text-shadow: 2px 2px #444;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-left {
                align-items: center;
                display: flex;
                justify-content: left;
                padding-left: 20px;
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
                text-align: left;
            }

            .title {
                font-size: 100px;
            }

            .links > a {
                color: #efefef;
                padding: 10px 8px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .adsd {
                position:absolute;
                color: #efefef;
                font-size: 31px;
                font-weight: 600;
                letter-spacing: .1rem;
                margin-left: 8px;
                margin-top: -15px;
            }

            .version {
                color: #efefef;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                margin-top: -30px;
                margin-left: 438px;
                text-transform: uppercase;
            }

            .m-b-md {
                padding-bottom: -30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-left position-ref full-height" id="startseite">
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
                <div class="title m-b-md">
                    <p class="adsd">Archiv der sozialen Demokratie (AdsD)</p>
                    Laravel-DiZwi
                    <p class="version">Version: 2.0.0</p>
                </div>

                
            </div>
        </div>
    </body>
</html>
