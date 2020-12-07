@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<form action="{{route('statuse/update', ['id'=>$statuse->id])}}" method="post" novalidate>
					@csrf
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" required value="{{$statuse->name}}">
					</div>

					<div class="form-group">
						<label>Tipo de estado</label>
						<input type="text" name="type_status_id" class="form-control" required value="{{$statuse->type_status_id}}">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-succes">Enviar</button>
					</div>
				</form>
			</article>
		</div>
	</section>
@endsection