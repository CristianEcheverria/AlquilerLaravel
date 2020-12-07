@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<form action="{{route('statuse/show')}}" method="post" novalidate class="form-inline">
					@csrf
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-default">Buscar</button>
						<a href="{{route('statuse.index')}}" class="btn btn-primary">Todo</a>
						<a href="{{route('statuse.create')}}" class="btn btn-primary">Crear</a>
					</div>
				</form>
			</article>

			<article class="col-md-12">
				<table class="table table-condensed table-striped table-bordered">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Tipo de estado</th>
							<th>Acción</th>
						</tr>
					</thead>
					<tbody>
						@foreach($statuses as $statuse)
						<tr>
							<td>{{$statuse->name}}</td>
							<td>{{$statuse->type_status_id}}</td>
							<td>
								<a class="btn btn-primary btn-xs" href="{{route('statuse.edit', ['id' => $statuse->id]) }}">Editar</a>
								<a class="btn btn-danger btn-xs" href="{{route('statuse/destroy', ['id' => $statuse->id]) }}">Eliminar</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</article>
		</div>
	</section>
@endsection