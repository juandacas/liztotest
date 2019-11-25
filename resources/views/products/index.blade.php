@extends('layouts.app')

@section('title','Products')

@section('content')

	<div class="container">

		<h1 class="text-center">Products List</h1>

		@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}}
			</div>
		@endif

		<table class="table table-dark table-hover">
			<tr>
			<th>producto</th>
			<th>Acción</th>
			</tr>
			@foreach($products as $product)
			<tr>
			<td>
			
			{{$product->name}}
			
			</td>
			<td><a href="/products/{{$product->id}}">Ver</a></td>
			</tr>
			@endforeach
		</table>

	</div>

@endsection