@extends('layouts.app')

@section('title','Supplier Create')

@section('content')

	<div class="container">

		<h1>Create New Supplier</h1>

		<form action="/suppliers" method="POST">
			@csrf
		  <div class="form-group">
		    <label for="email">Supplier Name:</label>
		    <input type="text" class="form-control" id="name" name="name">
		  </div>		  
		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
		
	</div>

@endsection