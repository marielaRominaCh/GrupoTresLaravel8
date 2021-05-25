<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

  // Nombre de la tabla de la base de datos que definimos (Database table name).
  protected $table='inscripciones';
 
  /** Por defecto Eloquent  asume que existe una clave primaria llamada id, si este no es nuesto caso lo tenemos que indicar en la variable $primaryKey */
  protected $primaryKey = 'idInscripcion';
 
  // Denimos los campos de la tabla directamente en la variable de tipo array $fillable
  protected $fillable =  array('idBusqueda','fecha','apellido','nombre');
 
  /**En la variable $hidden podemos indicar los campos que no queremos que nos devuelvan
    en las consultas, por ejemplo, los campos created_at y updated_at, que el ORM Eloquent
    añade por defecto */
  protected $hidden = ['created_at','updated_at'];
  //created_at, updated_atnos guardarán las fechas de creación y actualización de cada registro

  /** Obtener la busqueda a la que pertenece la inscripcion. */  
  public function busqueda()
  {
      return $this->belongsTo(Busqueda::class, 'idBusqueda','idBusqueda');
  }

}
