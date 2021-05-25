@extends('layouts.app')

@section('title', 'Busquedas - editar')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="">
            <h2>Editar Busqueda</h2>
        </div>
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-primary" href="{{ route('busquedas.index') }}"> Volver</a>
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

<form action="{{ route('busquedas.update', $busqueda->idBusqueda) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Id Rubro:</strong>
                <input type="text" name="idRubro" value="{{$busqueda->idRubro}}" class="form-control">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Empresa:</strong>
                <input type="text" name="empresa" value="{{$busqueda->empresa}}" class="form-control">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Titulo:</strong>
                <input type="text" name="titulo" value="{{$busqueda->titulo}}" class="form-control">
            </div>
        </div>
        <div class="col-sm-12 col-md-6 mb-2">
            <div class="form-group">
                <strong>Descripcion:</strong>
                <input type="text" name="descripcion" value="{{$busqueda->descripcion}}" class="form-control">
            </div>
        </div>
      
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>

</form>
@endsection