@extends('layouts.masterTemplate')

@section('title')
	CSS Colors
@stop

@section('headerContent')
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script>
		function changeCSSColor()
		{
			$( "#cssColorDiv" ).css( "background-color", $( "#cssColorText" ).val() );
		}
	</script>
@stop

@section('content')
	<label for="cssColorText">CSS Color</label>
	<input type="text" name="cssColorText" id="cssColorText" value="blue">
	<input type="submit" value="Change" onclick="changeCSSColor();">
	<fieldset id="cssColorFieldset">
		<legend>CSS Color</legend>
		<div id="cssColorDiv"></div>
	</fieldset>
	<br>
	<table id="cssColorTable">
		<tr>
			<th>Color Name</th>
			<th>Hex</th>
			<th>Color</th>
		</tr>
		<tr>
			<td>AliceBlue</td>
			<td>#F0F8FF</td>
			<td style="background-color: #F0F8FF"></td>
		</tr>
		<tr>
			<td>AntiqueWhite</td>
			<td>#FAEBD7</td>
			<td style="background-color: #FAEBD7"></td>
		</tr>
		<tr>
			<td>Aqua</td>
			<td>#00FFFF</td>
			<td style="background-color: #00FFFF"></td>
		</tr>
		<tr>
			<td>Aquamarine</td>
			<td>#7FFFD4</td>
			<td style="background-color: #7FFFD4"></td>
		</tr>
		<tr>
			<td>Azure</td>
			<td>#F0FFFF</td>
			<td style="background-color: #F0FFFF"></td>
		</tr>
	</table>
@stop
