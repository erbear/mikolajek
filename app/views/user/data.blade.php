@extends('layout')
@section('scripts')
	@parent
	<script type="text/template" id="one-data">
		<table>
		<button class="remove">usun</button>
		<tr>
			<td> email</td><td class="email"><%= email %></td><td class="edit" ><input type="text"/></td>
		</tr>	
		<tr>
			<td> tel</td><td><%= tel %></td>
		</tr>
		</table>
	</script>
@stop
@section('content')
	<div id="dodatkowe">

	</div>

@stop
