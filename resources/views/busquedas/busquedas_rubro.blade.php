@extends('layouts.app')

@section('title', 'Busquedas')

@section('content')

<h3 class="text-primary">Busquedas Laborales del rubro: <span class=" text-secondary">{{$rubro->descripcion}}</span> </h3>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-primary" href="{{ route('rubros.index') }}"> Volver</a>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-success">

            <!--  -->
            <th>Empresa</th>
            <th>Titulo</th>
            <th>Descripcion</th>

            <th class="text-center" width="400px">Acciones</th>
        </thead>

        <tbody>
            @foreach ($busquedas as $busqueda)
            <tr>

                <!--  -->
                <td>{{ $busqueda->empresa }}</td>
                <td>{{ $busqueda->titulo }}</td>
                <td>{{ $busqueda->descripcion }}</td>

                <td class="text-center">
                    <a class="btn btn-primary btn-sm" href="{{ route('inscripcion.crear',$busqueda->idBusqueda) }}"> Postularse</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('inscripcion.postulantes',$busqueda->idBusqueda) }}">Ver Inscriptos</a>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<!-- Modal para mensajes de exito -->
@if ($mensaje = Session::get('exito'))
<div class="modal fade modalExito" id="modalExitoBusqueda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="alert alert-success fw-bold">
                    <p>{{ $mensaje }}</p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
@endif

@endsection