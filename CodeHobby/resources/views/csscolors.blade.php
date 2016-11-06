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
		<tr>
			<td>Beige</td>
			<td>#F5F5DC</td>
			<td style="background-color: #F5F5DC"></td>
		</tr>
		<tr>
			<td>Bisque</td>
			<td>#FFE4C4</td>
			<td style="background-color: #FFE4C4"></td>
		</tr>
		<tr>
			<td>Black</td>
			<td>#000000</td>
			<td style="background-color: #000000"></td>
		</tr>
		<tr>
			<td>BlanchedAlmond</td>
			<td>#FFEBCD</td>
			<td style="background-color: #FFEBCD"></td>
		</tr>
		<tr>
			<td>Blue</td>
			<td>#0000FF</td>
			<td style="background-color: #0000FF"></td>
		</tr>
		<tr>
			<td>BlueViolet</td>
			<td>#8A2BE2</td>
			<td style="background-color: #8A2BE2"></td>
		</tr>
		<tr>
			<td>Brown</td>
			<td>#A52A2A</td>
			<td style="background-color: #A52A2A"></td>
		</tr>
		<tr>
			<td>BurlyWood</td>
			<td>#DEB887</td>
			<td style="background-color: #DEB887"></td>
		</tr>
		<tr>
			<td>CadetBlue</td>
			<td>#5F9EA0</td>
			<td style="background-color: #5F9EA0"></td>
		</tr>
		<tr>
			<td>Chartreuse</td>
			<td>#7FFF00</td>
			<td style="background-color: #7FFF00"></td>
		</tr>
		<tr>
			<td>Chocolate</td>
			<td>#D2691E</td>
			<td style="background-color: #D2691E"></td>
		</tr>
		<tr>
			<td>Coral</td>
			<td>#FF7F50</td>
			<td style="background-color: #FF7F50"></td>
		</tr>
		<tr>
			<td>CornflowerBlue</td>
			<td>#6495ED</td>
			<td style="background-color: #6495ED"></td>
		</tr>
		<tr>
			<td>Cornsilk</td>
			<td>#FFF8DC</td>
			<td style="background-color: #FFF8DC"></td>
		</tr>
		<tr>
			<td>Crimson</td>
			<td>#DC143C</td>
			<td style="background-color: #DC143C"></td>
		</tr>
		<tr>
			<td>Cyan</td>
			<td>#00FFFF</td>
			<td style="background-color: #00FFFF"></td>
		</tr>
	</table>
@stop
