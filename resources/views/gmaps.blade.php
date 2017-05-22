@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-8 col-md-4 ">
			<div class="panel panel-default">
				
				<script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
				{!!$map['html']!!}
				
				<div class="panel-body"> 
					<div class="btn-group">
						<button type="button" class="btn btn-info">Clase Incendio</button>
						<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Casa Habitación Habitada</a></li>
							<li><a href="#">Casa Habitación Deshabitada</a></li>
							<li><a href="#">Fábrica</a></li>
							<li><a href="#">Bosque</a></li>
							<li><a href="#">Industria Química</a></li>
							<li><a href="#">Pastizal</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-info">Tipo Emergencia</button>
						<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Química</a></li>
							<li><a href="#">Fuego Normal</a></li>
							<li><a href="#">Elementos Inflamables</a></li>
						</ul>
					</div>
					<div class="btn-group">
						<button type="button" class="btn btn-info">Estado Alerta</button>
						<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="caret"></span>
							<span class="sr-only">Toggle Dropdown</span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">Alerta Activa</a></li>
							<li><a href="#">Alerta Inactiva</a></li>
							<li><a href="#">Alerta Falsa</a></li>
						</ul>
					</div>
					<!--<form class="form-horizontal">
						<div class="form-group form-group-md"><br>
							<label class="col-sm-2 control-label" for="formGroupInputLarge">Large label</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="">
							</div>
						</div>
					</form>
					<form class="form-horizontal">
						<div class="form-group form-group-md"><br>
							<label class="col-sm-2 control-label" for="formGroupInputLarge">Large label</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" id="formGroupInputLarge" placeholder="">
							</div>
						</div>
					</form>-->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection