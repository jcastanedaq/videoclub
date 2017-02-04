@extends('layouts.master')

@section('content')

	@php
		//var_dump($pelicula);
	@endphp
	<div class="row">
		<div class="col-sm-4">
			<img src="{{ $pelicula->poster }}">
		</div>
		<div class="col-sm-8">
		<h1>{{ $pelicula->title }}</h1>
		<h2>Año: {{ $pelicula->year }}</h2>
		<h2>Director: {{ $pelicula->director }}</h2>
						<p>
					{{ $pelicula->synopsis }}

				</p>
				<p>
					Estado: 
					@if( $pelicula->rented == true )
						Pelicula actualmente alquilada
					@else
						Pelicula disponible
					@endif
				</p>
					@if( $pelicula->rented  == true )
						<a href="#" class="btn btn-default btn-danger btn-lg">Devolver</a>
					@else
						<a href="#" class="btn btn-default btn-primary btn-lg">alquilar</a>
					@endif
					<a href="{{url('/catalog/edit')}}/{{ $pelicula->id}}" class="btn btn-default btn-warning btn-lg">
						<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						Editar pelicula
					</a>
					<a href="{{url('/catalog')}}" class="btn btn-default btn-lg">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						Volver al listado
					</a>
		</div>
	</div>

@stop