@extends('master')
	@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Crear Denuncia</h1>
	</div>
</div>
<div class="row">

	<div class="col-md-12">
		<div class="panel-body">
		{!! Form::open(['route' => 'complaint.store', 'method' => 'POST']) !!}
    		<div class="form-group">
    			{!! Form::label('title', 'Titulo') !!}
    			{!! Form::text('title', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa un Titulo'])!!}
    		</div>
    		<div class="form-group">
    			{!! Form::label('description', 'Descripción') !!}
    			{!! Form::text('description', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
    		</div>
            <div class="form-group">
                {!! Form::label('category', 'Categoría') !!}

                {!! Form::select('categories_id', ['options' => $opciones])!!}
            </div>
<!--              <div>
                <div class="form-group">
                    {!!Form::label('fecha de denuncia')!!}
                    {!! Form::date('month', null, ['class' => 'form-control'])  !!}
                </div>
            </div>  -->
    		 <div class="form-group">
    			{!! Form::submit('Registrar Denuncia', ['class' => 'btn btn-info']) !!}

    		</div>
		{!! Form::close() !!}
		</div>
	</div>

</div>





@stop