<html>
<head>
	<title>@yield('title')</title>
	<style type="text/css">
		.edit{
			display: none;
		}
		

	</style>
</head>
<body>
	<div>
	@section('menu')
		<a href="{{URL::to('user/index')}}">home</a>
		@if (Auth::check())
		<a href="{{URL::to('user/data')}}">dane</a>
		<a href="{{URL::to('user/add-data')}}">dodaj dane</a>
		<a href="{{URL::to('user/add-company')}}">dodaj firme</a>
		<a href="{{URL::to('user/choose-company')}}">wybierz firme</a>
		<a href="{{URL::to('user/add-car')}}">dadaj auto</a>
		<a href="{{URL::to('user/choose-car')}}">wybierz auto</a>
		
		Jesteś zalogowany jako {{Auth::user()->name;}}
		<a href="{{URL::to('user/logout')}}">wyloguj!</a>
		@else
		<a href="{{URL::to('user/login')}}">zaloguj!</a>
		<a href="{{URL::to('user/register')}}">zarejestruj!</a>
		@endif
	@show
	</div>
	@yield('content')

@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="http://documentcloud.github.io/underscore/underscore-min.js"></script>
<script src="http://documentcloud.github.io/backbone/backbone-min.js"></script>
<script src="{{asset('js')}}/app.js"></script>

@show


</body>
</html>