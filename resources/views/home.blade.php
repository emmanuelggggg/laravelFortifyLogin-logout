@extends('layouts.app');

@section('head')
@endsection;
@section('contenidio')

	<style type="text/css">
		body{
			background-color: gray;
		}
	</style>
</head>
<body>

	<h1>  
		Hola {{ Auth::user()->name }}
	</h1>

	<a href="{{ url('users') }}">
		ir a usuarios
	</a>

	<form method="post" action="{{ url('logout') }}">
		@csrf

		<button type="submit">
			Salir
		</button>
	</form>

</body>
@endsection;