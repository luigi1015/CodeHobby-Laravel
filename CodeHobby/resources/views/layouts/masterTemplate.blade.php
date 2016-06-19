<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title','Welcome to CodeHobby!')</title>
		<link rel="stylesheet" href="{{ URL::asset('css/masterTemplate.css') }}">
	</head>
	<body>
		@if( Session::has('message') )
			<p class="flash-message">{{ Session::get('message') }}</p>
		@endif
		@if( Session::has('error') )
			<p class="flash-error">{{ Session::get('error') }}</p>
		@endif
		<a href='/'>Code Hobby</a>
		<a href='/'>Home</a>
		<a href='/projects'>Projects</a>
		<a href='/contact'>Contact</a>
		@if( Auth::check() )
			<!-- Logged in -->
			<a href='/logout'>Log out</a>
		@else
			<!-- Not logged in -->
		@endif
		<br>
		@yield( 'content' )
	</body>
</html>
