@extends('layouts.app')

@section('title','Suppliers')

@section('content')

	<div class="container">

		@if(session('status'))
			<div class="alert alert-success">
				{{session(status)}}
			</div>
		@endif

		<h1 class="text-center">Received Purchases List</h1>

		@if(session('status'))
			<div class="alert alert-success">
				{{session('status')}}
			</div>
		@endif

		<table class="table table-dark table-hover">
			<tr>
			<th>Fecha</th>
			<th>Status</th>
			<th>Costo</th>
			</tr>
			@foreach($purchases as $purchase)
			<tr>
			<td>{{$purchase->date}}</td>
			<td>{{$purchase->status}}</td>
			<td>{{$purchase->total_cost}}</td>
			</tr>
			@endforeach
		</table>

		<!-- Barra alternativa para ver compras por estado -->
		<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="/cancelled">Cancelled</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="/received">Received</a>
		    </li>
		  </ul>
		</nav>

	</div>

@endsection