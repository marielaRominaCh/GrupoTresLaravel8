@extends('layouts.app')

@section('title', 'Inscripciones - mostrar')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="text-primary">
                <h3> Detalles de la Inscripcion con ID: <span class="text-secondary">{{ $inscripcion->idInscripcion}}</span> </h3>
            </div>
            <div class="d-md-flex justify-content-md-end mb-2">
                <a class="btn btn-primary btn-sm me-1" href="{{ route('inscripciones.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <span class=" fw-bold">ID Inscripcion: </span> {{ $inscripcion->idInscripcion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <span class=" fw-bold">ID Busqueda: </span> {{ $inscripcion->idBusqueda }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <span class=" fw-bold">Título Busqueda: </span> {{ $una_inscripcion->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Fecha Inscripcion: </span>  {{ $inscripcion->fecha }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Apellido: </span>  {{ $inscripcion->apellido }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Nombre: </span>  {{ $inscripcion->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Fecha de creacion: </span> {{ $inscripcion->created_at }}
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Fecha de actualizacion: </span> {{ $inscripcion->updated_at }}
            </div>
        </div> 
    </div>
@endsection