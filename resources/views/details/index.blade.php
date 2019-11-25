@extends('layouts.app')

@section('title','Purchase Detail')

@section('content')

	<div class="container">

		<h1>Add Purchase Detail</h1>

		<form action="/details" method="POST">
			@csrf
		  <div class="form-group">
		    <label for="costo">Purchase:</label>
		    <input type="number" readonly class="form-control" id="purchase" name="purchase_id"  value="{{$purchase->id}}">
		  </div>
		  <div class="form-group">
			<label for="supplier">Product:</label>
		    <select class="form-control" id="product" name="product_id" >
		    	@foreach ($products as $product)
       				<option class="form-control" value="{{ $product->id}}"> {{$product->name }}</option>
         		@endforeach
		  	</select>
		   </div>
		   <div class="form-group">
		    <label for="quantity">Quantity:</label>
		    <input type="number" class="form-control" id="quantity" name="quantity" >
		   </div>
		   <div class="form-group">
		    <label for="costo">Cost:</label>
		    <input type="number" class="form-control" id="cost" name="cost" >
		   </div>
		   <div class="form-group">
		    <label for="total_cost">Total Cost:</label>
		    <input type="number" class="form-control" id="total_cost" name="total_cost" >
		   </div>
		   <input type="hidden" class="form-control" id="status" name="status" value="RECEIVED" >
		   	  
		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
		
	</div>

@endsection