@extends('master')
	@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Crear Categoría</h1>
	</div>
</div>
<div class="row">

	<div class="col-md-12">
		<div class="panel-body">
		{!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}
    		<div class="form-group">
    			{!! Form::label('name', 'Nombre') !!}
    			{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa el  Nombre'])!!}
    		</div>
    		<div class="form-group">
    			{!! Form::label('description', 'Descripción') !!}
    			{!! Form::text('description', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
    		</div>
<!--              <div>
                <div class="form-group">
                    {!!Form::label('fecha de denuncia')!!}
                    {!! Form::date('month', null, ['class' => 'form-control'])  !!}
                </div>
            </div>  -->
    		 <div class="form-group">
    			{!! Form::submit('Crear Categoría', ['class' => 'btn btn-info']) !!}

    		</div>
		{!! Form::close() !!}
		</div>
	</div>

</div>





@stop