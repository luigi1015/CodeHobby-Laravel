@extends('layouts.masterTemplate')

@section('title')
	Admin
@stop

@section('content')
	<div>
		<h2>Code Hobby Contact Comments</h2>
		<br>
		<form action="updateprojects" method="post">
			{!! csrf_field() !!}
			<input type="submit" value="Update Projects">
		</form>
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
					Full Name: {{ $project->fullname }}
					<br>
					URL: {{ $project->htmlurl }}
					<br>
					Description: {{ $project->description }}
					<br>
				</div>
			@endforeach
		@endif
	</div>
@stop
