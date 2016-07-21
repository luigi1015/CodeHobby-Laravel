@extends('layouts.masterTemplate')

@section('title')
	Random Data
@stop

@section('content')
	<form action="/randomdata" method="post">
		{!! csrf_field() !!}
		<table>
			<tr>
				<td class='align-right'>
					<label for="type">Type</label>
				</td>
				<td>
					<select name="type" id="type">
						<option value="int">Integer</option>
						<option value="password">Password</option>
						<option value="bytes">Bytes</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class='align-right'>
					<label for="amount">Amount</label>
				</td>
				<td>
					<input type="number" name="amount" id="amount" min="1" max="100" value="1">
				</td>
			</tr>
			<tr>
				<td class='align-right'>
					<label for="min">Minimum</label>
				</td>
				<td>
					<input type="number" name="min" id="min" min="1" max="100" value="1">
				</td>
			</tr>
			<tr>
				<td class='align-right'>
					<label for="max">Maximum</label>
				</td>
				<td>
					<input type="number" name="max" id="max" min="1" max="100" value="10">
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td class='align-right'>
					<input type="submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>
	@if( isset($randomData) )
		@foreach( $randomData as $random )
			{{ $random }}
			<br>
		@endforeach
	@endif
@stop
