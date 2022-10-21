<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellidos', 'genero', 'telefono', 'calle', 'colonia', 
    'municipio', 'fecha_nac', 'estado_civil'];
    //protected $guarded =['id'];

}
