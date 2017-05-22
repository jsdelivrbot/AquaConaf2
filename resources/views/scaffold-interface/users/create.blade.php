@extends('scaffold-interface.layouts.app')
@section('content')
<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3>Crear Nuevo Usuario</h3>
		</div>
		<div class="box-body">
			<form action="{{url('users/store')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "user_id">
				<div class="form-group">
					<label for="">Correo Electrónico</label>
					<input type="email" name = "email" class = "form-control" placeholder = "Correo Electrónico">
				</div>
				<div class="form-group">
					<label for="">Nombre</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Nombre">
				</div>
				<div class="form-group">
					<label for="">Teléfono/Celular</label>
					<input type="text" name = "telefono" class = "form-control" placeholder = "Teléfono/Celular">
				</div>
				<div class="form-group">
					<label for="">Identificador</label>
					<input type="text" name = "identificador" class = "form-control" placeholder = "Identificador">
				</div>
				<div class="form-group">
					<label for="">Contraseña</label>
					<input type="password" name = "password" class = "form-control" placeholder = "Contraseña">
				</div>
				<button class = "btn btn-primary" type="submit">Crear</button>
			</form>
		</div>
	</div>
</section>
@endsection
