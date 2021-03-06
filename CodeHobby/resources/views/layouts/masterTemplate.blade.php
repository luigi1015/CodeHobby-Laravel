<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title','Welcome to CodeHobby!')</title>
		<link rel="stylesheet" href="{{ URL::asset('css/maincodehobby.css') }}">
		@yield( 'headerContent' )
	</head>
	<body>
		<a id="top"></a>
		<header>
			<nav>
				<a href='/' id='pageTitle'>Code Hobby</a><!--
				--><a href='/' @if( isset($activePage) && $activePage == 'home' ) class='active' @endif>Home</a><!--
				--><a href='/projects' @if( isset($activePage) && $activePage == 'projects' ) class='active' @endif>Projects</a><!--
				--><a href='/reference' @if( isset($activePage) && $activePage == 'reference' ) class='active' @endif>Reference</a><!--
				--><a href='/contact' @if( isset($activePage) && $activePage == 'contact' ) class='active' @endif>Contact</a><!--
				-->@if( Auth::check() )<!--
					{{-- Logged in --}}
					--><a href='/admin' @if( isset($activePage) && $activePage == 'admin' ) class='active' @endif>Admin</a><!--
					--><a href='/eastereggs' @if( isset($activePage) && $activePage == 'eastereggs' ) class='active' @endif>Easter Eggs</a><!--
					--><a href='/logout'>Log out</a>
				@else
					{{-- Not logged in --}}
				@endif
			</nav>
		</header>
		@if( Session::has('message') )
			<p class="flash-message">{{ Session::get('message') }}</p>
		@endif
		@if( Session::has('error') )
			<p class="flash-error">{{ Session::get('error') }}</p>
		@endif
		@if( Session::has('errors') )
			@foreach($errors->all() as $error)
				<p class="flash-error">{{ $error }}</p>
			@endforeach
		@endif

		@if( Auth::check() )
			<!-- Logged in, so say hi! -->
			<h1 class='hi'>Hello, {{ Auth::user()->name }}!</h1>
		@endif
		<main>
			@yield( 'content' )
		</main>
	</body>
</html>
