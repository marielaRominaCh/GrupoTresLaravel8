<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rubro;


//use Illuminate\Support\Facades\DB;

class RubroController extends Controller
{
    /**
     * Muestra una lista de todos los rubros
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Devuelve todos los rubros        
        $rubros = Rubro::orderBy('descripcion')->paginate(6);

        return view('rubros.index', ['rubros' => $rubros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rubros.create');
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
            'descripcion' => 'required',
        ]);

        Rubro::create($request->all());

        return redirect()->route('rubros.index')->with('exito', 'Rubro creado con exito!!.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $idRubro
     * @return \Illuminate\Http\Response
     */
    public function show($idRubro)
    {
        $rubro = Rubro::find($idRubro);
        return view('rubros.show', ['rubro' => $rubro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $idRubro
     * @return \Illuminate\Http\Response
     */
    public function edit($idRubro)
    {
        $rubro = Rubro::find($idRubro);
        return view('rubros.edit')->with('rubro', $rubro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $IdRubro
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $idRubro)
    {

        $request->validate([
            'descripcion' => 'required',
        ]);

        $rubro = Rubro::find($idRubro);
        $rubro->update($request->all());

        return redirect()->route('rubros.index')->with('exito', 'Rubro actualizado con exito!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $idRubro
     * @return \Illuminate\Http\Response
     */
    public function destroy($idRubro)
    {
        $rubro = Rubro::find($idRubro);
        $rubro->delete();

        return redirect()->route('rubros.index')->with('exito', 'Rubro Eliminado con Exito');
    }


    /**
     * Muestra una lista de busquedas de un rubro
     *
     * @return \Illuminate\Http\Response
     */
    public function rubro_busquedas($idRubro)
    {
        /* $arr_busquedas = DB::table('busquedas')->where('idRubro','=',$idRubro)->get();
        dd($arr_busquedas); */

        $rubro = Rubro::find($idRubro);
        $arr_busquedas = $rubro->busquedas;

        return view('busquedas.busquedas_rubro')->with('busquedas', $arr_busquedas)
            ->with('rubro', $rubro);
    }

    public function obtenerrubros()
    {
        //Devuelve todos los rubros        
        $rubros = Rubro::orderBy('descripcion')->get();

        return view('rubros.busquedas_x_rubro')->with('rubros', $rubros);
    }

    public function busquedas_por_rubro(Request $request)
    {
        $idRubro = $request->idRubro;

        $rubro = Rubro::find($idRubro);
        $arr_busquedas = $rubro->busquedas;

        return view('busquedas.busquedas_rubro', ['busquedas' => $arr_busquedas], ['rubro' => $rubro]);
    }
}
