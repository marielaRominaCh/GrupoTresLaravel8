@extends('layouts.app')

@section('title', 'Rubros - mostrar')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-primary">
                <h3> Detalles Rubro  <span class="text-secondary">{{ $rubro->descripcion}}</span> </h3>
            </div>
            <div class="d-md-flex justify-content-md-end mb-2">
                <a class="btn btn-primary btn-sm me-1" href="{{ route('rubros.index') }}"> Volver</a>
               
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <span class=" fw-bold">ID: </span> {{ $rubro->idRubro }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Descripcion: </span>  {{ $rubro->descripcion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Fecha de creacion: </span> {{ $rubro->created_at }}
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <span class=" fw-bold">Fecha de actualizacion: </span> {{ $rubro->updated_at }}
            </div>
        </div> 
    </div>
@endsection