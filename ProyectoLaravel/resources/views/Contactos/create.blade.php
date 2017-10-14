@extends('master')
@section('title', 'Contact')

@section('content')
	<div class = "container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<form class="form-horizontal" method="post">
				@foreach ($errors->all() as $error)
				<p class="alert alert-danger"> {{ $error }}</p>
                @endforeach

 				@if (session('status'))
 					<div class="alert alert-success">
 						{{ session('status')}}
 					</div>	
 				@endif	

				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<fieldset>
					<legend>Crear contacto</legend>
					<div class="form-group">
						<label for="title" class="col-lg-2 control-label">Nombre</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="Nombre" placeholder="nombre del contacto" name="Nombre">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label">Telefono</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="Telefono" placeholder="telefono" name="Telefono">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label">Email</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="Email" placeholder="email" name="Email">
						</div>
					</div>

					<div class="form-group">
						<label for="title" class="col-lg-2 control-label">Parentesco</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="Parentesco" placeholder="parentesco" name="Parentesco">
						</div>
					</div>

			

					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button class="btn btn-default">Cancelar</button>
							<button type="submit" class="btn btn-primary">Guardar</span>
						</div>
					</div>
				</fieldset>
			</form>				
		</div>
	</div>
@endsection	