<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Age of Empire 2</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/welcome.css')}}">

    </head>

    <body>

        <video src="{{ asset('video/background.mp4') }}" muted loop autoplay></video>

        <a href="{{ route('home') }}">Admin</a>

        <img src="{{ asset('img/aoelogo.png') }}" alt="Age of Empire 2 Logo">

        <div>
            
            <a href="/units">Unit Comparator</a>
            <a href="/civs">Civilizations</a>

        </div>

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
    
</html>
