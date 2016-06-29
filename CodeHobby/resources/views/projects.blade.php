@extends('layouts.masterTemplate')

@section('title')
	CodeHobby Projects
@stop

@section('content')
	<div>
		<h2>My Projects</h2>
		These are some projects I put under my user (<a href='https://github.com/luigi1015'>luigi1015</a>) in GitHub.
		<br>
		<span class='note'>(Click on the titles to go to the GitHub page of the project.)</span>
		<br>
		@if( isset($projects) )
			@foreach( $projects as $project )
				<article class='project'>
					<a href='{{ $project->htmlurl }}'>{{ $project->name }}</a>
					<pre>{{ $project->description }}</pre>
				</article>
			@endforeach
			<br>
			@include('pagination.links', ['paginator' => $projects])
		@endif
	</div>
@stop
