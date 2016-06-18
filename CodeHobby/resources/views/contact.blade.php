@extends('layouts.masterTemplate')

@section('title')
	Welcome to CodeHobby!
@stop

@section('content')
	<p>
	Fill this form out and press Submit to send me a note.
	<br>
	Only name and message are required, but if you want me to contact you back please provide contact info.
	</p>
	<form action="/contact" method="post">
		{!! csrf_field() !!}
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
		<br>
		<label for="email">Email</label>
		<input type="text" name="email" id="email">
		<br>
		<label for="message">Message</label>
		<textarea name="message" id="message"></textarea>
		<br>
		<input type="submit" value="Submit">
	</form>
@stop
