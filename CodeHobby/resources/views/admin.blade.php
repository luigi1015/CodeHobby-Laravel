@extends('layouts.masterTemplate')

@section('title')
	Admin
@stop

@section('content')
	<form action="updateprojects" method="post">
		{!! csrf_field() !!}
		<input type="submit" value="Update Projects">
	</form>
	<h2>Code Hobby Contact Comments</h2>
	@if( isset($comments) )
		@foreach( $comments as $comment )
			<article class='comment'>
				<h3>Comment {{ $comment->id }}:</h3>
				Name: {{ $comment->name }}
				<br>
				Email: <a href="mailto:{{ $comment->email }}">{{ $comment->email }}</a>
				<br>
				IP Address: {{ $comment->ipaddress }}
				<br>
				Comment: 
				<pre>{{ $comment->comment }}</pre>
			</article>
		@endforeach
		<br>
		@include('pagination.links', ['paginator' => $comments])
	@endif
@stop
