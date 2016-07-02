@extends('layouts.masterTemplate')

@section('title')
	Lorem Ipsum Text
@stop

@section('content')
	<form action="loremipsum" method="post">
		{!! csrf_field() !!}
		<label for="numberOfParagraphs">Number of paragraphs(between 1 and 20):</label>
		<input type="number" name="numberOfParagraphs" min="1" max="20" value="5">
		<br>
		<input type="submit" value="Get the text">
	</form>
	<br>
	@if( isset($loremipsumtext) )
		<fieldset class="loremIpsum">
			<legend>Lorem Ipsum Text</legend>
			@foreach( $loremipsumtext as $paragraph )
				{{ $paragraph }}
				<br>
				<br>
			@endforeach
		</fieldset>
	@endif
@stop
