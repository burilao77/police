@extends('master')
	@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Editar Categoría</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel-body">
		{!! Form::model($category,[ 'route' => ['category.update', $category->id], 'method' => 'PUT']) !!}
		<input type="hidden" name="_method" value="PATCH">
    		<div class="form-group">
    			{!! Form::label('name', 'Nombre') !!}
    			{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el Nombre']) !!}
    		</div>
    		<div class="form-group">
    			{!! Form::label('description', 'Descripción') !!}
    			{!! Form::text('description', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
    		</div>
    		 <div class="form-group">
    			{!! Form::submit('Editar Categoría', ['class' => 'btn btn-info']) !!}

    		</div>
		{!! Form::close() !!}
		</div>
	</div>
</div>

@stop