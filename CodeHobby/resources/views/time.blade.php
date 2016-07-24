@extends('layouts.masterTemplate')

@section('title')
	Time
@stop

@section('content')
	<h3>Current time:</h3>
	@if( isset($times) )
		<table class="refTable">
			<tr>
				<th>Time Zone</th>
				<th>Current Time</th>
			</tr>
			@foreach( $times as $timezone => $time )
				<tr>
					<td>{{ $timezone }}</td>
					<td>{{ $time->format('Y-m-d H:i:s') }}</td>
				</tr>
			@endforeach
		</table>
	@endif
@stop
