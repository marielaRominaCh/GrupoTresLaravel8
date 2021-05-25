@extends('layouts.app')

@section('title', 'Rubros')

@section('content')

<h3 class="text-primary">Lista de Rubros</h3>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-success me-1" href="{{ route('rubros.create') }}"> Crear nuevo Rubro</a>
            <!-- <a class="btn btn-primary btn-sm " href="{{ route('rubros.index') }}">Recargar</a> -->
        </div>
    </div>
</div>


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

                    <form action="{{ route('rubros.destroy', $rubro->idRubro) }}" method="POST">

                        <a class="btn btn-secondary text-white btn-sm" href="{{ route('rubros.show',$rubro->idRubro) }}">Detalles</a>

                        <a class="btn btn-secondary btn-sm" href="{{ route('rubros.edit',$rubro->idRubro) }}">Editar</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Borrar</button>

                        <a class="btn btn-primary btn-sm" href="{{ route('rubro.busquedas',$rubro->idRubro) }}">Busquedas Laborales</a>
                    </form>


                </td>
            </tr>            
            @endforeach
        </tbody>

    </table>
</div>

<span>{{ $rubros->links() }}</span>

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