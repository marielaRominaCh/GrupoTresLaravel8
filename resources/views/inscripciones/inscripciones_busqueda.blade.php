@extends('layouts.app')

@section('title', 'Inscripciones')

@section('content')

<h3 class="text-primary">Postulantes de la Busqueda: <span class=" text-secondary">{{$busqueda->titulo}}
</span> </h3>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-md-flex justify-content-md-end mb-2">
            <a class="btn btn-primary" href="{{ url()->previous() }}"> Volver</a>
        </div>
    </div>
</div>


<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-success">

            <th>Fecha Inscripcion</th>
            <th>Apellido</th>
            <th>Nombre</th>
        </thead>

        <tbody>
            @foreach ($inscripciones as $inscripcion)
            <tr>

                <td>{{ $inscripcion->fecha }}</td>
                <td>{{ $inscripcion->apellido }}</td>
                <td>{{ $inscripcion->nombre }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<!--  -->
@endsection