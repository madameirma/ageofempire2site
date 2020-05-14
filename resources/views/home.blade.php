@extends ('layouts.app')

@section ('content')

			<section>

				<form action="{{ route('insert') }}" method="post">
					
					@csrf

					<div>

						<input type="text" id="firstCiv" name="name" autocomplete="off" placeholder="Choose a civilization">

						<ul id="firstList">
							
							@foreach ($civsInfos as $civ)

								<li data-id="{{ $civ->id }}"> {{ $civ->name }} </li>

							@endforeach

						</ul>

					</div>

					<textarea name="desc" autocomplete="off">New description</textarea>

					<input type="submit" value="Add">

				</form>

			</section>

			<section>

				<form action="{{ route('update') }}" method="post">

					@csrf
					
					<div>

						<input type="text" name="name" id="secondCiv" autocomplete="off" placeholder="Choose a civilization">

						<ul id="secondList">
							
							@foreach ($civsInfos as $civ)

								<li data-id="{{ $civ->id }}"> {{ $civ->name }} </li>

							@endforeach

						</ul>

					</div>

					<textarea name="desc" autocomplete="off">New description</textarea>
						
					<input type="submit" value="Update">

				</form>

			</section>

			<section>

				<form action="{{ route('delete') }}" method="post">

					@csrf

					<div>

						<input type="text" name="name" id="thirdCiv" autocomplete="off" placeholder="Choose a civilization">

						<ul id="thirdList">
							
							@foreach ($civsInfos as $civ)

								<li data-id="{{ $civ->id }}"> {{ $civ->name }} </li>

							@endforeach

						</ul>

					</div>

					<input type="submit" value="Delete">

				</form>

			</section>


@endsection