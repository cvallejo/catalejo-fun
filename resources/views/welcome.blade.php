<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Catalejo.fun</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <!-- Styles -->
        @php
            use Carbon\Carbon;
            $ahora = Carbon::now()->toTimeString();

            if ($ahora >= '03:00:01' && $ahora < '05:00:00') {
                $fondo = '3-5.png';
            } elseif ($ahora >= '05:00:01' && $ahora < '07:00:00') {
                $fondo = '5-7.png';
            } elseif ($ahora >= '07:00:01' && $ahora < '15:00:00') {
                $fondo = '07-15.png';
            } elseif ($ahora >= '15:00:01' && $ahora < '20:00:00') {
                $fondo = '15-20.png';
            } elseif ($ahora >= '20:00:01' && $ahora < '21:00:00') {
                $fondo = '20-21.png';
            } elseif ($ahora >= '21:00:01' && $ahora < '23:00:00') {
                $fondo = '21-23.png';
            } elseif ($ahora >= '23:00:01' && $ahora < '03:00:00') {
                $fondo = '23-03.png';
            }
        @endphp

        <style>
            html, body {
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                color: #ffffff;
                padding: 0 10px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background: url('img/{{ $fondo }}') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{ url('img/catalejo_logo.png') }}" alt="Catalejo.fun" width="280">
                </div>
                <div class="links">
                    <i class="far fa-envelope-open"></i>
                    <a href="mailto:hola@catalejo.fun">hola@catalejo.fun</a>
                </div>
            </div>
        </div>
    </body>
</html>
