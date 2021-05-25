<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Busqueda;

//use Illuminate\Support\Facades\DB;

class BusquedaController extends Controller
{
    /**
     * Muestra una lista de busquedas
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Devuelve todas las busquedas       
        $busquedas = Busqueda::paginate(6);
        return view('busquedas.index')->with('busquedas', $busquedas);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('busquedas.create');
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
            'idRubro' => 'required',
            'empresa' => 'required',
            'titulo' => 'required',
        ]);

        $busqueda = new Busqueda();
        $busqueda->idRubro = $request->input('idRubro');
        $busqueda->empresa = $request->input('empresa');
        $busqueda->titulo = $request->input('titulo');
        $busqueda->descripcion = $request->input('descripcion');
        $busqueda->save();

        return redirect('/busquedas')->with('exito', 'Busqueda Laboral creada con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $idBusqueda
     * @return \Illuminate\Http\Response
     */
    public function show($idBusqueda)
    {
        $busqueda = Busqueda::find($idBusqueda);

        $un_rubro =$busqueda ->rubro;

        return view('busquedas.show')->with('busqueda', $busqueda)->with('un_rubro',$un_rubro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int  $idBusqueda
     * @return \Illuminate\Http\Response
     */
    public function edit($idBusqueda)
    {
        $busqueda = Busqueda::find($idBusqueda);
        return view('busquedas.edit')->with('busqueda', $busqueda);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $idBusqueda
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $idBusqueda)
    {
        $request->validate([
            'idRubro' => 'required',
            'empresa' => 'required',
            'titulo' => 'required',
        ]);

        $busqueda = Busqueda::find($idBusqueda);
        $busqueda->idRubro = $request->input('idRubro');
        $busqueda->empresa = $request->input('empresa');
        $busqueda->titulo = $request->input('titulo');
        $busqueda->descripcion = $request->input('descripcion');
        $busqueda->save();

        return redirect('/busquedas')->with('exito', 'Busqueda Laboral actualizada con exito!!.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $idBusqueda
     * @return \Illuminate\Http\Response
     */

    public function destroy($idBusqueda)
    {
        $busqueda = Busqueda::find($idBusqueda);
        $busqueda->delete();

        return redirect('/busquedas')->with('exito', 'Busqueda Laboral Eliminada con Exito');
    }

    /**
     * Muestra una lista de inscripciones de una busqueda laboral
     *
     * @param  int $idBusqueda
     * @return \Illuminate\Http\Response
     */
    public function busqueda_inscripciones($idBusqueda)
    {
        $busqueda = Busqueda::find($idBusqueda);
        $arr_inscripciones = $busqueda->inscripciones;

        return view('inscripciones.inscripciones_busqueda')->with('inscripciones', $arr_inscripciones)
            ->with('busqueda', $busqueda);
    }

    public function obtenerbusquedas()
    {
        //Devuelve todas las busquedas        
        $busquedas = Busqueda::get();

        return view('inscripciones.inscripciones_x_busqueda')->with('busquedas', $busquedas);
    }

    public function inscripciones_por_busqueda(Request $request)
    {
        $idBusqueda = $request->idBusqueda;

        $busqueda = Busqueda::find($idBusqueda);
        $arr_inscripciones = $busqueda->inscripciones;

        return view('inscripciones.inscripciones_busqueda')->with('inscripciones', $arr_inscripciones)
            ->with('busqueda', $busqueda);
    }
}
