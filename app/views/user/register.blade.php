@extends('layout')
@section('content')
{{Form::open(array('url'=>'user/register', 'method'=>'post'));}}
	{{Form::text('login');}}
	{{Form::password('password');}}
	{{Form::submit('Zarejestruj');}}
{{Form::close();}}
@stop