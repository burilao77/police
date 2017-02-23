@extends('master')
	@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Editar Denuncia</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel-body">
		{!! Form::model($complaint,[ 'route' => ['complaint.update', $complaint->id], 'method' => 'PUT']) !!}
		<input type="hidden" name="_method" value="PATCH">
    		<div class="form-group">
    			{!! Form::label('title', 'Titulo') !!}
    			{!! Form::text('title', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa una Titulo']) !!}
    		</div>
    		<div class="form-group">
    			{!! Form::label('description', 'Descripción') !!}
    			{!! Form::text('description', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
    		</div>
    		 <div class="form-group">
    			{!! Form::submit('Editar Denuncia', ['class' => 'btn btn-info']) !!}

    		</div>
		{!! Form::close() !!}
		</div>
	</div>
</div>

@stop