<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title','Welcome to CodeHobby!')</title>
		<link rel="stylesheet" href="{{ URL::asset('css/maincodehobby.css') }}">
	</head>
	<body>
		<header>
			<nav>
				<a href='/' id='pageTitle'>Code Hobby</a><!--
				--><a href='/' @if( isset($activePage) && $activePage == 'home' ) class='active' @endif>Home</a><!--
				--><a href='/projects' @if( isset($activePage) && $activePage == 'projects' ) class='active' @endif>Projects</a><!--
				--><a href='/contact' @if( isset($activePage) && $activePage == 'contact' ) class='active' @endif>Contact</a>
				@if( Auth::check() )
					{{-- Logged in --}}
					Hello, {{ Auth::user()->name }}!
					<a href='/admin'>Admin</a>
					<a href='/logout'>Log out</a>
				@else
					{{-- Not logged in --}}
				@endif
			</nav>
		</header>
		<br>
		@if( Session::has('message') )
			<p class="flash-message">{{ Session::get('message') }}</p>
		@endif
		@if( Session::has('error') )
			<p class="flash-error">{{ Session::get('error') }}</p>
		@endif
		<main>
			@yield( 'content' )
		</main>
	</body>
</html>
