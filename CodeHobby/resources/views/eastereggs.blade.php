@extends('layouts.masterTemplate')

@section('title')
	CodeHobby Easter Eggs
@stop

@section('content')
	Here is a list of "Easter Egg" pages within CodeHobby:
	<br>
	<a href='/ip'>Get your external IP address</a>
	<br>
	<a href='/json/ip'>Get your external IP address as JSON data (meant for automated computer access)</a>
	<br>
	<a href='/loremipsum'>Get some Lorem Ipsum text</a>
	<br>
	<a href='/browserdata'>Get some data about your browser</a>
	<br>
	<a href='/randomdata'>Get some random data</a>
	<br>
	<a href='/time'>Get the current time in various time zones</a>
@stop
