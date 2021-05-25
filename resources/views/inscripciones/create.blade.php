@extends('layouts.app')

@section('title', 'Inscripciones - crear')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-primary">
            <h2>Ficha de Inscripcion</h2>
        </div>
        <div class="d-md-flex justify-content-md-end mb-2">
            <!-- <a class="btn btn-primary" href="{{ route('inscripciones.index') }}"> Volver</a> -->
            <a class="btn btn-primary" href="{{ url()->previous() }}"> Volver</a>

        </div>
    </div>
</div>

@if ($errors->any())
<!-- Si hay algun error -->
<div class="alert alert-danger fw-bold">
    Error! <br>
    <ul>
        @foreach ($errors->all() as $error)
        <!-- Listar todos los mensajes de error -->
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('inscripciones.store') }}" method="POST">
    @csrf

    <div class="row">    

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Id Busqueda:
                <input type="number" name="idBusqueda" class="form-control" value="{{$idBusqueda}}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Fecha:
                <input type="date" name="fecha" class="form-control" placeholder="Fecha" value="{{date('Y-m-d')}}" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Apellido:
                <input type="text" name="apellido" class="form-control" value="{{old('apellido')}}" placeholder="Apellido">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Nombre:
                <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}" placeholder="Nombre">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>

</form>
@endsection