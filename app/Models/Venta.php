<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['empleado_id', 'sneaker_id','fecha_venta', 'forma_pago'];

    //Una venta puede ser hecha por muchas empleados
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }

    //Un sneaker puede ser vendido por muchas empleados
    public function sneaker()
    {
        return $this->belongsTo(Sneaker::class);
    }

}
