@extends('layout')
@section('content')
{{Form::model($data, array('url'=>'user/add-data', 'method'=>'post'))}}
	email:{{Form::text('email');}}
	telefon:{{Form::text('tel');}}
	{{Form::submit('Zatwierdz');}}
{{Form::close();}}
@stop