@extends('layouts.app')
@section('content')
	<section class="container">
		<div class="row">
			<article class="col-md-10 col-md-offset-1">
				<form action="{{route('categorie/update', ['id'=>$categorie->id])}}" method="post" novalidate>
					@csrf
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" required value="{{$categorie->name}}">
					</div>

					<div class="form-group">
						<label>Estado</label>
						<input type="text" name="status_id" class="form-control" required value="{{$categorie->status_id}}">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-succes">Enviar</button>
					</div>
				</form>
			</article>
		</div>
	</section>
@endsection