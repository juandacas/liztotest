@extends('layouts.app')

@section('title','Suppliers')

@section('content')

	<div class="container">
		@if(session('status'))
			<div class="alert alert-success">
				{{session(status)}}
			</div>
		@endif

		<h1 class="text-center">Suppliers</h1>

		Nombre: <h3>{{$supplier->name}}</h3>

		<a href="/suppliers/{{$supplier->id}}/edit" class="btn btn-warning">Editar</a>

	</div>

@endsection