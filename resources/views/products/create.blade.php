@extends('layouts.app')

@section('title','Product Create')

@section('content')

	<div class="container">

		<h1>Create New Product</h1>

		<form action="/products" method="POST">
			@csrf
		  <div class="form-group">
		    <label for="email">Product Name:</label>
		    <input type="text" class="form-control" id="name" name="name">
		  </div>		  
		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
		
	</div>

@endsection