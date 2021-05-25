@extends('layouts.app')

@section('title', 'Inscripciones')

@section('content')

<h2 class="text-primary mb-2">Busquedas Laborales</h2>

<div class="row">
    <form action="{{ route('por.busqueda.inscripciones') }}" method="GET">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                <h4 class="text-primary">Elija un Busqueda Laboral para ver sus Postulantes:</h4>
                <select class="form-select" name='idBusqueda' id="">                   
                    @foreach($busquedas as $busqueda)
                    <option value="{{$busqueda->idBusqueda}}">{{$busqueda->titulo}}</option>
                    @endforeach
                </select>
            </div>
        </div>
       

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
</div>

@endsection
