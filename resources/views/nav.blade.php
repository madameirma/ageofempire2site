<nav>
	<a href="{{ route('welcome') }}"><img src="{{ asset('img/aoelogo.png') }}" alt="Age of Empire 2 logo"></a>
	<a href="{{ route('civs') }}">Civilizations</a>
	<a href="{{ route('units') }}">Units Comparator</a>

	@guest
	<a href="{{ route('home') }}">Admin</a>
	@endguest

	@auth
	<a href="{{ Auth::logout() }}">Logout</a>
	@endauth

</nav>