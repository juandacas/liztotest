@extends('layouts.app')

@section('title','Product Edit')

@section('content')

	<div class="container">

		<h1>Edit Product</h1>

		<form action="/products/{{$product->id}}" method="POST">
			@method('PUT')
			@csrf
		  <div class="form-group">
		    <label for="email">Product Name:</label>
		    <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
		  </div>		  
		  <button type="submit" class="btn btn-primary">Editar</button>
		</form>
		
	</div>

@endsection