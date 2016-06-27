@extends('layouts.masterTemplate')

@section('title')
	CodeHobby Projects
@stop

@section('content')
	<div>
		<h2>Code Hobby Projects</h2>
		These are some projects I put under my Code Hobby banner.
	</div>
	<div>
		<h2>Jeff Projects</h2>
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
		@endif
	</div>
@stop
