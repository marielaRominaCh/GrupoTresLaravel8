<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;

//use Illuminate\Support\Facades\DB;

class InscripcionController extends Controller
{
    /**
     * Muestra una lista de inscripciones
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Devuelve todas las inscripciones       
        /*   $inscripciones = Inscripcion::get();
        return view('inscripciones.index')->with('inscripciones', $inscripciones); */

        //Devuelve todas las inscripciones con PAGINADO    
        $inscripciones = Inscripcion::latest()->paginate(6);

        return view('inscripciones.index')->with('inscripciones', $inscripciones);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscripciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $request->validate([
            'idBusqueda' => 'required',
            'fecha' => 'required',
            'apellido' => 'required',
            'nombre' => 'required',
        ]);

        Inscripcion::create($request->all());

        return redirect()->route('layouts.index')->with('exito', 'Inscripcion realizada con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $idInscripcion
     * @return \Illuminate\Http\Response
     */
    public function show($idInscripcion)
    {
        $inscripcion = Inscripcion::find($idInscripcion);

        $una_inscripcion = $inscripcion -> busqueda;

        return view('inscripciones.show')->with('inscripcion', $inscripcion)->with('una_inscripcion', $una_inscripcion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int  $idInscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit($idInscripcion)
    {
        $inscripcion = Inscripcion::find($idInscripcion);
        return view('inscripciones.edit')->with('inscripcion', $inscripcion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $idInscripcion
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $idInscripcion)
    {

        $request->validate([
            'idBusqueda' => 'required',
            'fecha' => 'required',
            'apellido' => 'required',
            'nombre' => 'required',
        ]);

        $inscripcion = Inscripcion::find($idInscripcion);
        $inscripcion->update($request->all());

        return redirect()->route('inscripciones.index')->with('exito', 'Inscripcion actualizada con exito!!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $idInscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy($idInscripcion)
    {
        $inscripcion = Inscripcion::find($idInscripcion);
        $inscripcion->delete();

        return redirect()->route('inscripciones.index')->with('exito', 'Inscripcion Eliminada con Exito');
    }

    /**
     * Muestra porfulario para realizar una nueva inscripcion para una busqueda laboral.
     *
     * @param  int $idBusuqueda
     * @return \Illuminate\Http\Response
     */
    public function crear_inscripcion($idBusqueda)
    {
        //
        return view('inscripciones.create')->with('idBusqueda', $idBusqueda);
    }
}
