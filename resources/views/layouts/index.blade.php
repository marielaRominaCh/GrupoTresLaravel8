@extends('layouts.app')

@section('title', 'Inicio')


@section('content')
<div class="container">
    <p class="fs-3 text-center">Bienvenido a la agencia <strong>Empleos Tics</strong>  donde porda realizar las inscripciones a las busquedas laborales online de manera fácil y segura</p>

    <!-- La carpeta "imagenes" se encuentra en "public"  -->
    <div class="d-flex justify-content-center">        
        <img class="img-fluid" src="/imagenes/foto-trabajo.jpg" alt="..">
    </div>
</div>

<!-- Modal para mensajes de exito -->
@if ($mensaje = Session::get('exito'))
<div class="modal fade modalExito" id="modalExitoInscripcion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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