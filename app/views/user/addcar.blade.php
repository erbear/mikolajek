@extends('layout')
@section('content')
{{Form::open(array('url'=>'user/add-car', 'method'=>'post'));}}
	{{Form::text('name');}}
	{{Form::submit('dodaj');}}
{{Form::close();}}
@stop