@extends('layouts.app')

@section('title','Products')

@section('content')

	<div class="container">
		@if(session('status'))
			<div class="alert alert-success">
				{{session(status)}}
			</div>
		@endif

		<h1 class="text-center">Product</h1>

		Nombre: <h3>{{$product->name}}</h3>

		<a href="/products/{{$product->id}}/edit" class="btn btn-warning">Editar</a>

	</div>

@endsection