@extends('layouts.masterTemplate')

@section('title')
	Browser Data
@stop

@section('content')
	<p>
	Your ip address is {{ Request::ip() }}
	</p>
	<p>
	Width: <span id="displayWidth"></span>
	<br>
	Height: <span id="displayHeight"></span>
	</p>
@stop

@section('headerContent')
	<script src="{{ URL::asset('js/browserdata.js') }}"></script>
@stop
