@extends('master')
@if(Session::has('message'))
<div class=" alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
</div>
@endif
	@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Lista de Categorias</h1>
	</div>
</div>
		<div class="row">
					<table class="table table-striped">
					<tr>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Creado</th>
						<th>Modificado</th>
						<th>Acciones</th>

					</tr>

					<a href="{{route('category.create')}}" class="btn btn-info pull-right">Crear Categoría</a><br><br>
					@foreach($categories as $category)
						<tr>
							<td>{{ $category->id }}</td>
							<td>{{ $category->name }}</td>
							<td>{{ $category->description }}</td>
							<td>{{ $category->created_at->format('d-m-Y') }}</td>
							<td>{{ $category->updated_at->format('d-m-Y') }}</td>
							<td>
								<form action="{{route('category.destroy', $category->id)}}" method="post">
								<input type="hidden" name="_method" value="delete">	
								<input type="hidden" name="_token" value="{{ csrf_token() }}">	
								<a href="{{route('category.edit', $category->id)}}" class="btn btn-primary">Edit</a>
								<input type="submit" class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar esta Categoría');" name="name" value="delete">	

								<a href="{{route('category.show', $category->id)}}" class="btn btn-info">Ver Denuncias</a>								
								</form>
							</td>
						</tr>
					@endforeach
					</table>
		</div>

@stop