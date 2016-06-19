@extends('layouts.masterTemplate')

@section('title')
	Admin
@stop

@section('content')
	<div>
		<h2>Code Hobby Contact Comments</h2>
		These are some projects I put under my Code Hobby banner.
		<br>
		@foreach( $comments as $comment )
			<div>
				<h3>Comment {{ $comment->id }}:</h3>
				Name: {{ $comment->name }}
				<br>
				Email: <a href="mailto:{{ $comment->email }}">{{ $comment->email }}</a>
				<br>
				IP Address: {{ $comment->ipaddress }}
				<br>
				Comment: 
				<pre>{{ $comment->comment }}</pre>
			</div>
		@endforeach
	</div>
@stop