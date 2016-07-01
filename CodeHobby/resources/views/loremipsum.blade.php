@extends('layouts.masterTemplate')

@section('title')
	IP Address: {{ Request::ip() }}
@stop

@section('content')
	This is a placeholder for the real lorem ipsum content.
@stop
