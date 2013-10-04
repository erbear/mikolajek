@extends('layout')
@section('content')
{{Form::model(Auth::user(),array('url'=>'user/choose-company', 'method'=>'post'));}}
@foreach ($companies as $company)
	{{Form::radio('company_id', $company->id);}}{{$company->name}}
</br>
@endforeach
{{Form::submit('zatwierdz');}}
{{Form::close();}}
@stop