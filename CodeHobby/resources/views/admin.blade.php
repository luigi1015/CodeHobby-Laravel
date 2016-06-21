@extends('layouts.masterTemplate')

@section('title')
	Admin
@stop

@section('content')
	<div>
		<h2>Code Hobby Contact Comments</h2>
		These are some projects I put under my Code Hobby banner.
		<br>
		@if( isset($comments) )
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
		@endif
		<br>
		@if( isset($projects) )
			@foreach( $projects as $project )
				<div>
					<h3>Project {{ $project->id }}:</h3>
					Name: {{ $project->name }}
					<br>
					Full Name: {{ $project->full_name }}
					<br>
					URL: {{ $project->html_url }}
					<br>
					Description: {{ $project->description }}
					<br>
				</div>
			@endforeach
		@endif
	</div>
@stop
