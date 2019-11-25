@extends('layouts.app')

@section('title','Cancel Purchase')

@section('content')

	<div class="container">

		<h1>Cancel Purchase</h1>

		<form action="/purchases/{{$purchase->id}}" method="POST">
			@method('PUT')
			@csrf
		   <h3>¿Está seguro de cancelar esta compra?</h3>
		   <input type="hidden" class="form-control" id="status" name="status" value="CANCELLED">		  
		  <button type="submit" class="btn btn-primary">Proceder</button>
		</form>
		
	</div>

@endsection