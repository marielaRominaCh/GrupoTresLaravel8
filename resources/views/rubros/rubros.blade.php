@extends('layouts.app')

@section('title', 'Rubros')

@section('content')

<h3 class="text-primary">Lista de Rubros</h3>

<div class="table-responsive">
    <table class="table table-bordered ">
        <thead class="table-success">

            <!--  -->
            <th>Descripcion</th>

            <th class="text-center" width="400px">Acciones</th>
        </thead>

        <tbody>
            @foreach ($rubros as $rubro)
            <tr>

                <!--  -->
                <td>{{ $rubro->descripcion }}</td>

                <td class="text-center">

                    <form action="" method="">                      

                        <a class="btn btn-primary btn-sm" href="{{ route('rubro.busquedas',$rubro->idRubro) }}"> Ver Busquedas Laborales</a>
                    </form>


                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<!-- Modal para mensajes de exito -->
@if ($mensaje = Session::get('exito'))
<div class="modal fade modalExito" id="modalExitoRubro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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