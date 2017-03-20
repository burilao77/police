@extends('master')
    @section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Detalle de la Denuncia</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel-body">
        {!! Form::model($complaint,[ 'route' => ['complaint.show', $complaint->id], 'method' => 'POST']) !!}

             <p class="info">ID:&nbsp;&nbsp;{{$complaint->id}}</p>
             <p class="info">Título:&nbsp;&nbsp;{{$complaint->title}}</p>
             <p class="info">Descripción:&nbsp;&nbsp;{{$complaint->description}}</p>
             <p class="info">Creado el:&nbsp;&nbsp;{{ $complaint->created_at->format('d-m-Y')}}</p>
             <p class="info">Modificado el:&nbsp;&nbsp;{{ $complaint->updated_at->format('d-m-Y') }}</p>


             <p class="info">Categoría:&nbsp;&nbsp;{{$cat[$complaint->id]}}</p>

        {!! Form::close() !!}
        </div>
    </div>
</div>

@stop
