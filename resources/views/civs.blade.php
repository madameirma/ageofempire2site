<!DOCTYPE html>
<html lang="en">

	<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Civilizations</title>

        <!-- Styles -->

		<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
		<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/civ.css') }}">

	</head>

	<body>

		@include('nav')

		<section>

			@foreach ($civsInfos as $key => $civ)

			<a href="/civs/{{ $civ->name }}">

				<div>

					<img src=" {{ asset($flags[$key]) }}"alt="">

					<p>{{ $civ->name }}</p>

					<p>{{ $civ->army_type }}</p>

				</div>

			</a>

			@endforeach

		</section>
			
	</body>

</html>