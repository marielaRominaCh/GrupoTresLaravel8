@extends('layouts.app')

@section('title', 'Inscripciones')

@section('content')

<h3 class="text-primary mb-3">Lista de Todas las Inscripciones</h3>
<!-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-success me-1" href="{{ route('inscripciones.create') }}"> Crear nueva Inscripcion</a>
        </div>
    </div>
</div> -->

<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-success">

            <th>Fecha Inscripcion</th>
            <th>Apellido</th>
            <th>Nombre</th>

            <th class="text-center" width="400px">Acciones</th>
        </thead>

        <tbody>
            @foreach ($inscripciones as $inscripcion)
            <tr>

                <td>{{ $inscripcion->fecha }}</td>
                <td>{{ $inscripcion->apellido }}</td>
                <td>{{ $inscripcion->nombre }}</td>

                <td class="text-center">
                    <form action="{{ route('inscripciones.destroy', $inscripcion->idInscripcion) }}" method="POST">

                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('inscripciones.show',$inscripcion->idInscripcion) }}">Detalles</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('inscripciones.edit',$inscripcion->idInscripcion) }}">Editar</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<span>{{ $inscripciones->links() }}</span>

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