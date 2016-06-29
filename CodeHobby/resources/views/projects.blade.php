@extends('layouts.masterTemplate')

@section('title')
	CodeHobby Projects
@stop

@section('content')
	<div>
		<h2>My Projects</h2>
		These are some projects I put under my user (luigi1015) in GitHub.
		<br>
		@if( isset($projects) )
			@foreach( $projects as $project )
				<article class='project'>
					Project {{ $project->githubid }}
					<br>
					{{ $project->name }}
					<br>
					{{ $project->fullname }}
					<br>
					{{ $project->htmlurl }}
					<br>
					{{ $project->description }}
				</article>
			@endforeach
			<br>
			@include('pagination.links', ['paginator' => $projects])
		@endif
	</div>
@stop
