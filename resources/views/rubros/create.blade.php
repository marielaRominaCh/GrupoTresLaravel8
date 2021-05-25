@extends('layouts.app')

@section('title', 'Rubros - crear')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="text-primary">
            <h3>Agregar nuevo Rubro</h3>
        </div>
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-primary" href="{{ route('rubros.index') }}"> Volver</a>
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

<form action="{{ route('rubros.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                Descripcion:
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>

</form>
@endsection