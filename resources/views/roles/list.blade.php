@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<form action="{{route('role/show')}}" method="post" novalidate class="form-inline">
					@csrf
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-default">Buscar</button>
						<a href="{{route('role.index')}}" class="btn btn-primary">Todo</a>
						<a href="{{route('role.create')}}" class="btn btn-primary">Crear</a>
					</div>
				</form>
			</article>

			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Estado</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						@foreach($roles as $role)
						<tr>
							<td>{{$role->name}}</td>
							<td>{{$role->status_id}}</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{route('role.edit', ['id' => $role->id]) }}">Editar</a>
								<a class="btn btn-danger btn-xs" href="{{route('role/destroy', ['id' => $role->id]) }}">Eliminar</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</article>
		</div>
	</section>
@endsection