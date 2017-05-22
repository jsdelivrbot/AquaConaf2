@extends('scaffold-interface.layouts.app')
@section('content')
<section class="content">
<div class="box box-primary">
<div class="box-header">
	<h3>Todos los Usuarios</h3>
</div>
	<div class="box-body">
		<a href="{{url('/users/create')}}" class = "btn btn-success"><i class="fa fa-plus fa-md" aria-hidden="true"></i> Nuevo</a>
		<table class = "table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Correo Electrónico</th>
			<th>Roles</th>
			<th>Permisos</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->identificador}}</td>
				<td>
				@if(!empty($user->roles))
					@foreach($user->roles as $role)
					<small class = 'label bg-blue'>{{$role->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>Sin Roles</small>
				@endif
				</td>
				<td>
				@if(!empty($user->permissions))
					@foreach($user->permissions as $permission)
					<small class = 'label bg-orange'>{{$permission->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>Sin Permisos</small>
				@endif
				</td>
				<td>
					<a href="{{url('/users/edit')}}/{{$user->id}}" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="{{url('users/delete')}}/{{$user->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
</section>
@endsection
