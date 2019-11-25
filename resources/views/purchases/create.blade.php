@extends('layouts.app')

@section('title','Purchase Create')

@section('content')

	<div class="container">

		<h1>Create New Purchase</h1>

		<form action="/purchases" method="POST">
			@csrf
		  <div class="form-group">
		    <label for="date">Fecha:</label>
		    <input type="date" class="form-control" id="date" name="date" required>
		  </div>
		  <div class="form-group">
		    <label for="costo">Costo Total:</label>
		    <input type="number" step="any" class="form-control" id="total_cost" name="total_cost" required>
		  </div>
		  <div class="form-group">
			<label for="supplier">Supplier:</label>
		    <select class="form-control" id="supplier" name="supplier" required>
		    	@foreach ($suppliers as $supplier)
       				<option class="form-control" value="{{ $supplier->id}}"> {{$supplier->name }}</option>
         		@endforeach
		  </select>
		   </div>
		   <input type="hidden" class="form-control" id="status" name="status" value="IN_PROGRESS">		  
		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
		
	</div>

@endsection