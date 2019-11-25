@extends('layouts.app')

@section('title','Suppliers')

@section('content')

	<div class="container">

		<h1 class="text-center">Suppliers List</h1>

		@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}}
			</div>
		@endif

		<table class="table table-dark table-hover">
			<tr>
			<th>Supplier</th>
			<th>Acción</th>
			</tr>
			@foreach($suppliers as $supplier)
			<tr>
			<td>
			
			{{$supplier->name}}
			
			</td>
			<td><a href="/suppliers/{{$supplier->id}}">Ver</a></td>
			</tr>
			@endforeach
		</table>

	</div>

@endsection