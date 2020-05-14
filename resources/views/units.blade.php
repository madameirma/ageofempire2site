<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Units comparator</title>

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/reset.css')}}">
		<link rel="stylesheet" href="{{ asset('css/nav.css')}}">
        <link rel="stylesheet" href="{{ asset('css/unit.css')}}">

	</head>

	<body>

		@include('nav')

		<section>

			<div>

				<input type="text" id="firstUnit" autocomplete="off" placeholder="Choose an unit">

				<ul id="firstSelector">
					
					@foreach ($unitsInfos as $unit)

						<li data-id="{{ $unit->id }}"> {{ $unit->name }} </li>

					@endforeach

				</ul>


			</div>

			<div>

				<input type="text" id="secondUnit" autocomplete="off" placeholder="Choose an unit">

				<ul id="secondSelector">

					@foreach ($unitsInfos as $unit)

						<li data-id="{{ $unit->id }}"> {{ $unit->name }} </li>

					@endforeach

				</ul>

			</div>

		</section>

		<script src="{{ asset('js/app.js')}}"></script>

	</body>

</html>