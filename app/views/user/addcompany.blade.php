@extends('layout')
@section('content')
{{Form::model( array('url'=>'user/add-company', 'method'=>'post'));}}
	{{Form::text('name');}}
	{{Form::submit('Dodaj');}}
{{Form::close();}}
@stop