@extends('layouts.app')

@section('title','Purchase')

@section('content')

	<div class="container">
		@if(session('status'))
			<div class="alert alert-success">
				{{session(status)}}
			</div>
		@endif

		<table class="table table-dark table-hover">
			<tr>
			<th>Fecha</th>
			<th>Status</th>
			<th>Costo</th>
			<th>Recibir</th>
			<th>Cancelar</th>
			</tr>
			
			<tr>
			<td>{{$purchase->date}}</td>
			<td>{{$purchase->status}}</td>
			<td>{{$purchase->total_cost}}</td>
			
			<td><a href="/detail/{{$purchase->id}}" class="btn btn-success">Proceder</a></td>
			<td><a href="/purchases/{{$purchase->id}}/edit" class="btn btn-danger">Cancelar</a></td>
			</tr>
			
		</table>

	</div>

@endsection