@extends('layouts.masterTemplate')

@section('title')
	CodeHobby Projects
@stop

@section('content')
	<div>
		<h2>My Projects</h2>
		These are some projects I put under my user (<a href='https://github.com/luigi1015'>luigi1015</a>) in GitHub.
		<br>
		They're in various states of working, in progress, and abandoned, and only some of which I will work on again.
		<br>
		So be aware of that if a project isn't working. If you submit a bug to a project, I may or may not ignore it.
		<br>
		<br>
		<span class='note'>Click on the titles to go to the GitHub page of the project.</span>
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
