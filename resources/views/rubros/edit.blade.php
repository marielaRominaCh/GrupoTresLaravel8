@extends('layouts.app')

@section('title', 'Rubros - editar')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="">
            <h2>Editar Rubro</h2>
        </div>
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-primary" href="{{ route('rubros.index') }}"> Volver</a>
        </div>
    </div>
</div>

@if ($errors->any())
<!-- Si hay algun error -->
<div class="alert alert-danger fw-bold">
    <strong>Error!</strong> <br>
    <ul>
        <!-- Listar todos los mensajes de error -->
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('rubros.update', $rubro->idRubro) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Descripcion:</strong>
                <input type="text" name="descripcion" value="{{$rubro->descripcion}}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>

</form>
@endsection