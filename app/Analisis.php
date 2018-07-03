<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
    protected $fillable = [
        'fechaAnalisis', 'tipoAnalisis_idTipoAnalisis', 'empleado_codigoEmpleado', 'muestra_codigoMuestra'
    ];
}
