@extends('layout')
@section('content')
	{{Form::model(Auth::user(),array('url'=>'user/choose-my-car', 'method'=>'get'));}}
	@foreach ($cars as $car)
		{{Form::label('id', $car->name);}}
		{{Form::checkbox('id[]', $car->id);}}
	</br>
	@endforeach
	{{Form::submit('Zatwierdz');}}
	{{Form::close();}}
@stop