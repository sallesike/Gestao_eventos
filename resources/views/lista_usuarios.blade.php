@extends('template.template')
@section('content')
@if(session('success'))
<div class="alert alert-success mt-2">
	{{ session('success') }}
</div>
@endIf
<div class="mt-3 card">
	<div class="card card-header">
		<h4>Lista de usuarios <i class="fa fa-users"></i></h4>
	</div>
	<div class="card card-body">
		<table width="100%" class="table-list table table-striped display responsive nowrap" id="school">
			<thead>
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)	
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->cpf}}</td>
					<td>
						<a href="{{route('user.show', $user->id)}}" alt='visualizar'>Ver <i class="fa fa-eye"></i></a>
					</td>
				</tr>
				@endForeach
			</tbody>
		</table>
	</div>
</div>
@endSection
