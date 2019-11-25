@extends('layouts.app')

@section('title','Supplier Edit')

@section('content')

	<div class="container">

		<h1>Edit Supplier</h1>

		<form action="/suppliers/{{$supplier->id}}" method="POST">
			@method('PUT')
			@csrf
		  <div class="form-group">
		    <label for="email">Supplier Name:</label>
		    <input type="text" class="form-control" id="name" name="name" value="{{$supplier->name}}">
		  </div>		  
		  <button type="submit" class="btn btn-primary">Editar</button>
		</form>
		
	</div>

@endsection