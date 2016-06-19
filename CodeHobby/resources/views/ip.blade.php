@extends('layouts.masterTemplate')

@section('title')
	IP Address: {{ Request::ip() }}
@stop

@section('content')
	<p>
	Your ip address is {{ Request::ip() }}
	</p>
@stop
