@extends('layouts.app')

@section('title', 'Busquedas - crear')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-primary">
            <h2>Agregar nueva Busqueda Laboral</h2>
        </div>
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-primary" href="{{ route('busquedas.index') }}"> Volver</a>
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

<form action="{{ route('busquedas.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Id Rubro:
                <input type="number" name="idRubro" class="form-control" value="{{old('idRubro')}}" placeholder="Id Rubro">
            </div>
        </div>      

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Empresa:
                <input type="text" name="empresa" class="form-control" value="{{old('empresa')}}" placeholder="Empresa">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Título:
                <input type="text" name="titulo" class="form-control" value="{{old('titulo')}}" placeholder="Titulo">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Descripcion:
                <input type="text" name="descripcion" class="form-control" value="{{old('descripcion')}}" placeholder="Descripcion">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>

</form>
@endsection