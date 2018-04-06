@extends('master')
   
    @section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Crear Denuncia</h1>
    </div>
</div>
{!! Form::open(['route' => 'complaint.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
      <a href="#title" aria-controls="title" role="tab" data-toggle="tab">Titulo</a>
    </li>
    <li role="presentation">
      <a href="#description" aria-controls="description" role="tab" data-toggle="tab">Descripcion</a>
    </li>
    <li role="presentation">
      <a href="#category" aria-controls="category" role="tab" data-toggle="tab">Categoria</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="title">
        <div class="col-xs-9">
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('title', 'Titulo') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa un Titulo'])!!}

                </div>
            </div>
        </div>
      <!--- ...  -->
    </div>
    <div role="tabpanel" class="tab-pane" id="description">
        <div class="col-xs-9">
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('description', 'Descripción') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '30x5', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
                </div>
            </div>
        </div>
      </div>
    <div role="tabpanel" class="tab-pane" id="category">
        <div class="col-xs-9">
            <div class="panel-body">
                <div class="form-group">
                    
        <select class="js-example-basic-single form-control" name="category">
            @foreach($opciones as $key => $op)
            <option value="{{ $key }}">{{ $op }}</option>
            @endforeach
          </select>
                   
                </div>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="panel-body">
            <div class="form-group">
                {!! Form::submit('Registrar Denuncia', ['class' => 'btn btn-info']) !!}

            </div>
            {!! Form::close() !!}
              </div>
        </div>
      </div>
<script>
$(document).ready(function() {
    $('.js-example-basic-single form-control').select2();
});
</script>
</div>



<!--
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
                {!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '30x5', 'required', 'placeholder' => 'Ingresa una Descripción']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category', 'Categoría') !!}
                {!! Form::select('categories_id', $opciones, null, ['class' => 'form-control', 'required' => 'required'])!!}
            </div>

             <div class="form-group">
                {!! Form::submit('Registrar Denuncia', ['class' => 'btn btn-info']) !!}

            </div>
        {!! Form::close() !!}
        </div>
    </div>


</div>
-->

@stop
