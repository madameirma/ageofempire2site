<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ $selectedCiv->name }} </title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/nav.css')}}">
        <link rel="stylesheet" href="{{ asset('css/uniqueciv.css')}}">


    </head>

    <body>

        @include('nav')

        <main>

            <img src="{{ asset('img/'.Str::snake($selectedCiv->expansion).'.png') }}" alt="" title="{{ $selectedCiv->expansion }} expansion">

            <h1> {{ $selectedCiv->name }} </h1>

            <img src="{{ asset('img/'.Str::snake($selectedCiv->expansion).'.png') }}" alt="" title="{{ $selectedCiv->expansion }} expansion">

            <p>{{ $selectedCiv->army_type }} civilization</h2>

            <section>

                <div>

                    <h2>History</h2>

                    @isset ($civFromDB)

                    <p> {{ $civFromDB->desc }} </p>

                    @endisset

                    @empty ($civFromDB)

                    <p> Not added yet </p>

                    @endempty

                </div>

                <div>
                    
                    <h2>Particularities</h2>

                    <ul>

                        @foreach ($civBonus as $bonus)

                        <li> {{$bonus}} </li>

                        @endforeach

                    </ul>

                    <h2>Team Bonus</h2>

                    <p> {{ $selectedCiv->team_bonus }} </p>

                </div>

            </section>

            <div>

                <!-- Check if this civ has multiple unique units and add the plural of "unit" -->

                @if (count($uniqueUnits) === 1)

                <h2>Unique Unit</h2>

                @else

                <h2>Unique Units</h2>

                @endif

                <div>

                    @foreach ($uniqueUnits as $key => $uniqueUnit)

                    <a href="{{ route('comparator', ['id1' => $uniqueUnit['infos']->id, 'id2' => $uniqueUnit['elite']]) }}">
                        
                        {{ $uniqueUnit['infos']->name }}

                        <img src="{{ asset($uniqueUnit['img']) }}" alt="">

                    </a>

                    @endforeach

                </div>

            </div>

        </main>


    </body>
    
</html>
