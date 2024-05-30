<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $fillable = [
        'codigo_estudiante',
        'nombre_estudiante',
        'programa_id',
        'fecha_hora_ingreso',
        'sala_id',
        'responsable_id',
    ];
}
