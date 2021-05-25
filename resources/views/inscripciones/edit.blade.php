@extends('layouts.app')

@section('title', 'Inscripciones - editar')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="">
            <h2>Editar Inscripcion</h2>
        </div>
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-primary" href="{{ route('inscripciones.index') }}"> Volver</a>
        </div>
    </div>
</div>

@if ($errors->any())
<!-- Si hay algun error -->
<div class="alert alert-danger">
    <strong>Error!</strong> <br>
    <ul>
        @foreach ($errors->all() as $error)
        <!-- Listar todos los mensajes de error -->
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('inscripciones.update', $inscripcion->idInscripcion) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Id Busqueda:</strong>
                <input type="text" name="idBusqueda" value="{{$inscripcion->idBusqueda}}" class="form-control" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Fecha:</strong>
                <input type="date" name="fecha" value="{{$inscripcion->fecha}}" class="form-control" readonly>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Apellido:</strong>
                <input type="text" name="apellido" value="{{$inscripcion->apellido}}" class="form-control">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" value="{{$inscripcion->nombre}}" class="form-control">
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>

</form>
@endsection