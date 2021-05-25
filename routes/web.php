<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RubroController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\InscripcionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
})->name('layouts.index'); 

Route::resource('rubros', RubroController::class);
Route::resource('busquedas', BusquedaController::class);
Route::resource('inscripciones', InscripcionController::class);


Route::get('busquedas/rubro/{idRubro}', 'App\Http\Controllers\RubroController@rubro_busquedas')->name('rubro.busquedas');

Route::get('busquedas_por_rubro', 'App\Http\Controllers\RubroController@obtenerrubros')->name('obtenerrubros');

Route::get('busquedas_por/rubro', 'App\Http\Controllers\RubroController@busquedas_por_rubro')->name('por.rubro.busquedas');

Route::get('inscripcion/busqueda/{idBusqueda}', [InscripcionController::class,'crear_inscripcion'])->name('inscripcion.crear');

Route::get('postulantes/busqueda/{idBusqueda}', 'App\Http\Controllers\BusquedaController@busqueda_inscripciones')->name('inscripcion.postulantes');

Route::get('inscripciones_por_busqueda', 'App\Http\Controllers\BusquedaController@obtenerbusquedas')->name('obtenerbusquedas');

Route::get('inscripciones_por/busqueda', 'App\Http\Controllers\BusquedaController@inscripciones_por_busqueda')->name('por.busqueda.inscripciones');


