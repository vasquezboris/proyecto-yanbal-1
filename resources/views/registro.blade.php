@extends('plantilla')
@section('contenido')
<br><br>
<div class="container col-md-8 col-md-offset-2">
	<div class="well bs-component">

		<form class="form-horizontal" method="post" action="registro1">

			@foreach($errors->all() as $error)
			<p class="alert alert-danger">{{ $error }}</p>
			@endforeach

			@if (session('status'))
				<div class="alert alert-success">
					{{session('status') }}
					
				</div>
				@endif
					

			<input type="hidden" name="_token" value="{!! csrf_token() !!}">

			<fieldset>
				<legend>Registro</legend>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Nombre</label>
					<div class="col-lg-10">
						<input type="text" 
						class="form-control" id="title" placeholder="Nombre" name="name">
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Apellido</label>
					<div class="col-lg-10">
						<input type="text" 
						class="form-control" id="title" placeholder="Apellido" name="apellido">
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">E-mail</label>
					<div class="col-lg-10">
						<input type="text" 
						class="form-control" id="title" placeholder="E-mail" name="mail">
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-lg-2 control-label">Direccion</label>
					<div class="col-lg-10">
						<input type="text" 
						class="form-control" id="title" placeholder="Direccion" name="direccion">
					</div>
				</div>

				
				<div class="form-group">
					<div class="col-lg-10 col-lg-offset-2">
						<button class="btn btn-default">Cancelar</button>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</div>
			</fieldset>
		</form>
		
	</div>
</div>
@endsection