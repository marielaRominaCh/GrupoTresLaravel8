@extends('layouts.app')

@section('title', 'Rubros')

@section('content')

<h2 class="text-primary mb-2">Rubros</h2>

<div class="row">
    <form action="{{ route('por.rubro.busquedas') }}" method="GET">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group fw-bold">
                <h4 class="text-primary">Elija un Rubro para ver sus Busquedas Laborales:</h4>
                <select class="form-select" name='idRubro' id="">
                    @foreach($rubros as $rubro)
                    <option value="{{$rubro->idRubro}}">{{$rubro->descripcion}}</option>
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