<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ $uniqueUnit1->name }} VS {{ $uniqueUnit2->name }} </title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{ asset('css/nav.css')}}">
        <link rel="stylesheet" href="{{ asset('css/comparator.css')}}">

    </head>

    <body>

    @include('nav')

        <main>

            <!-- First Unit -->

            <section>

                <h1> {{ $uniqueUnit1->name }} </h1>

                <!-- Trivia -->

                <div class="trivia">

                    <div>

                        <h2>Trivia</h2>

                        @isset ($uniqueUnit1->description)

                        <p> {{ $uniqueUnit1->description }} </p>

                        @endisset

                        @isset ($uniqueUnit1->age)
                
                        <p> Available at {{ $uniqueUnit1->age }} age </p>

                        @endisset

                    </div>

                    <div>
                        
                        <img src="{{ asset($image1)}}" alt="">

                    </div>
                
                </div>

                <!-- Statistics -->

                <div class="stats">

                    

                    <h2>Stats</h2>

                    <p> Cost : 

                        @isset ($cost1->Food) 

                        <img src="{{ asset('img/food.png')}}" alt=""> {{ $cost1->Food }}

                        @endisset

                        @isset ($cost1->Wood) 

                        <img src="{{ asset('img/wood.png')}}" alt=""> {{ $cost1->Wood }}

                        @endisset

                        @isset ($cost1->Gold) 

                        <img src="{{ asset('img/gold.png')}}" alt=""> {{ $cost1->Gold }}

                        @endisset

                        @isset ($cost1->info)

                        {{ $cost1->info }}

                        @endisset

                        @isset ($cost1->Cost)

                        {{ $cost1->Cost }}

                        @endisset
                    
                    </p>

                    @isset ($uniqueUnit1->build_time)

                    <p> Training Time : {{ $uniqueUnit1->build_time }}s </p>

                    @endisset

                    @isset ($uniqueUnit1->attack)

                    <p> Attack : {{ $uniqueUnit1->attack }} </p>

                    @endisset

                    @isset ($uniqueUnit1->reload_time)

                    <p> Attack Speed : {{ $uniqueUnit1->reload_time }}</p>

                    @endisset

                    @isset ($uniqueUnit1->attack_delay)

                    <p> Reload : {{ $uniqueUnit1->attack_delay }} </p>

                    @endisset

                    @isset ($uniqueUnit1->movement_rate)

                    <p> Movement speed : {{ $uniqueUnit1->movement_rate }}</p>

                    @endisset

                    @isset ($uniqueUnit1->line_of_sight)

                    <p> Line of sight : {{ $uniqueUnit1->line_of_sight }}</p>

                    @endisset

                    @isset ($uniqueUnit1->hit_points)
                    
                    <p> HP : {{ $uniqueUnit1->hit_points }}</p>

                    @endisset

                    @isset ($uniqueUnit1->range)
                    
                    <p> Range : {{ $uniqueUnit1->range }}</p>

                    @endisset

                    @isset ($uniqueUnit1->armor)
                    
                    <p> Armor : {{ $uniqueUnit1->armor }}</p>

                    @endisset

                    @isset ($uniqueUnit1->accuracy)

                    <p> Accuracy : {{ $uniqueUnit1->accuracy }}</p>

                    @endisset

                </div>

                <!-- Effective against -->

                <div class="counters">

                    <h2>Effective against</h2>

                    @isset ($uniqueUnit1->attack_bonus)

                        @foreach ($uniqueUnit1->attack_bonus as $bonus)

                            <p> {{ $bonus }}</p>

                        @endforeach

                    @endisset

                    @empty ($uniqueUnit1->attack_bonus)

                    <p>This unit has not bonuses against others</p>

                    @endempty

                </div>
                
            </section>

            <!-- Second Unit -->

            <section>

                <h1> {{ $uniqueUnit2->name }} </h1>

                <!-- Trivia -->

                <div class="trivia">

                    <div>

                        <h2>Trivia</h2>

                        @isset ($uniqueUnit2->description)

                        <p> {{ $uniqueUnit2->description }} </p>

                        @endisset

                        @isset ($uniqueUnit2->age)
                    
                        <p> Available at {{ $uniqueUnit2->age }} age </p>

                        @endisset

                    </div>

                    <div>
                        
                        <img src="{{ asset($image2)}}" alt="">

                    </div>
                
                </div>

                <!-- Statistics -->

                <div class="stats">

                    <h2>Stats</h2>

                    <p> Cost : 

                        @isset ($cost2->Food) 

                        <img src="{{ asset('img/food.png')}}" alt=""> {{ $cost2->Food }}

                        @endisset

                        @isset ($cost2->Wood) 

                        <img src="{{ asset('img/wood.png')}}" alt=""> {{ $cost2->Wood }}

                        @endisset

                        @isset ($cost2->Gold) 

                        <img src="{{ asset('img/gold.png')}}" alt=""> {{ $cost2->Gold }}

                        @endisset

                        @isset ($cost2->info)

                        {{ $cost2->info }}

                        @endisset

                        @isset ($cost2->Cost)

                        {{ $cost2->Cost }}

                        @endisset
                    
                    </p>    

                    @isset ($uniqueUnit2->build_time)

                    <p> Training Time : {{ $uniqueUnit2->build_time }}s </p>

                    @endisset

                    @isset ($uniqueUnit2->attack)

                    <p> Attack : {{ $uniqueUnit2->attack }} </p>

                    @endisset

                    @isset ($uniqueUnit2->reload_time)

                    <p> Attack speed : {{ $uniqueUnit2->reload_time }}</p>

                    @endisset

                    @isset ($uniqueUnit2->attack_delay)

                    <p> Reload : {{ $uniqueUnit2->attack_delay }} </p>

                    @endisset

                    @isset ($uniqueUnit2->movement_rate)

                    <p> Movement speed : {{ $uniqueUnit2->movement_rate }}</p>

                    @endisset

                    @isset ($uniqueUnit2->line_of_sight)

                    <p> Line of sight : {{ $uniqueUnit2->line_of_sight }}</p>

                    @endisset

                    @isset ($uniqueUnit2->hit_points)
                    
                    <p> HP : {{ $uniqueUnit2->hit_points }}</p>

                    @endisset

                    @isset ($uniqueUnit2->range)
                    
                    <p> Range : {{ $uniqueUnit2->range }}</p>

                    @endisset

                    @isset ($uniqueUnit2->armor)
                    
                    <p> Armor : {{ $uniqueUnit2->armor }}</p>

                    @endisset

                    @isset ($uniqueUnit2->accuracy)

                    <p> Accuracy : {{ $uniqueUnit2->accuracy }}</p>

                    @endisset

                </div>

                <!-- Effective against -->

                <div class="counters">

                    <h2>Effective against</h2>

                    @isset ($uniqueUnit2->attack_bonus)

                        @foreach ($uniqueUnit2->attack_bonus as $bonus)

                            <p> {{ $bonus }}</p>

                        @endforeach

                    @endisset

                    @empty ($uniqueUnit2->attack_bonus)

                    <p>No bonuses against other units</p>

                    @endempty

                </div>
                
            </section>

        </main>

    </body>
    
</html>
