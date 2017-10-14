@extends('master')
@section('title','Ver todos los tickets')
@section('content')

	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Tickets</h2>
			</div>
			@if (session('status'))
				<div class="alert alert-succes">
					{{ session('status') }}
				</div>
			@endif		
			@if ($Contactos->isEmpty())
				<p>No hay contactos</p>
			@else
				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Email</th>
							<th>Parentesco</th>
						</tr>
					</thead>
					<tbody>
						@foreach($Contactos as $contacto)
							<tr>
								<td>{!! $contacto->Nombre !!} </td>
								<td>{!! $contacto->Telefono !!} </td>
								<td>{!! $contacto->Email !!} </td>
								<td>{!! $contacto->Parentesco !!} </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
@endsection												