
@extends('plantilla')

@section('contenido')
<br><br>
<center>
		<div class="col-lg-8 col-md-8 col-xs-12">
	<h3>Listado de Categoria
		<a href="registro"><button class="btn btn-success">Nuevo</button></a>
	</h3>
	<br>
		@include('barra')
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-resposive">
				<br><br>
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Opciones</th>
					</thead>
					
					
					
				</table>
			</div>
			
		</div>
	</div>
	</center>
 
@endsection