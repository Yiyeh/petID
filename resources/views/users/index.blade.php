@extends('layouts.app')

@section('content')
	<ol class="breadcrumb">
	  <li class="active"><a href="{{route('site-index')}}">Inicio</a></li>
	</ol>

	<div class="col-sm-4">
		<div class="well">
			<ul class="list-group">
				<h5>Ultimas Mascotas Registradas</h5>
				@foreach($pets as $pet)
					
					<li class="list-group-item">{{$pet->name}} {{$pet->lastname1}} {{$pet->lastname2}}<a href="#" class="btn btn-xs btn-default pull-right">Ver Mascota</a></li>

				@endforeach
			</ul>
			{{ $pets->render() }}
		</div>
	</div>



@endsection