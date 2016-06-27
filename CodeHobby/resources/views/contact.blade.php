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
		<table>
			<tr>
				<td class='align-right'>
					<label for="name">Name</label>
				</td>
				<td>
					<input type="text" name="name" id="name">
				</td>
			</tr>
			<tr>
				<td class='align-right'>
					<label for="email">Email</label>
				</td>
				<td>
					<input type="text" name="email" id="email">
				</td>
			</tr>
			<tr>
				<td class='align-right'>
					<label for="message">Message</label>
				</td>
				<td>
					<textarea name="message" id="message" rows="6" cols="50"></textarea>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td class='align-right'>
					<input type="hidden" name="ipaddress" value="{{ Request::ip() }}">
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
@stop
