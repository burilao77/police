@extends('master')

	@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel-body">
        {!! Form::model($categories,[ 'route' => ['categories.show', $categories->id], 'method' => 'POST']) !!}

             <p class="info">ID:&nbsp;&nbsp;{{$categories->id}}</p>
             <p class="info">Título:&nbsp;&nbsp;{{$categories->name}}</p>
             <p class="info">Descripción:&nbsp;&nbsp;{{$categories->description}}</p>
             <p class="info">Creado el:&nbsp;&nbsp;{{ $categories->created_at->format('d-m-Y')}}</p>
             <p class="info">Modificado el:&nbsp;&nbsp;{{ $categories->updated_at->format('d-m-Y') }}</p>


             <p class="info">Categoría:&nbsp;&nbsp;{{$denuncias[$categories->id]}}</p>

        {!! Form::close() !!}
        </div>
    </div>
</div>

@stop