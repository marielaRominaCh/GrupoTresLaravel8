@extends('layouts.app')

@section('title', 'Busquedas - mostrar')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="text-primary">
                <h3> Detalles de la Busqueda: <span class="text-secondary">{{ $busqueda->titulo}}</span> </h3>
            </div>
            <div class="d-md-flex justify-content-md-end mb-2">
                <a class="btn btn-primary btn-sm me-1" href="{{ route('busquedas.index') }}"> Volver</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <span class=" fw-bold">ID busqueda: </span> {{ $busqueda->idBusqueda }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <span class=" fw-bold">ID rubro: </span> {{ $busqueda->idRubro }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <span class=" fw-bold">Nombre rubro: </span> {{ $un_rubro->descripcion }}
            </div>
        </div>
     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Empresa: </span>  {{ $busqueda->empresa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Título: </span>  {{ $busqueda->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Descripcion: </span>  {{ $busqueda->descripcion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Fecha de creacion: </span> {{ $busqueda->created_at }}
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Fecha de actualizacion: </span> {{ $busqueda->updated_at }}
            </div>
        </div> 
    </div>
@endsection