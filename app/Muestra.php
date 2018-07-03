<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muestra extends Model
{
    protected $fillable = [
        'fechaRecepcionMuestra', 'temperaturaMuestra', 'cantidadMuestra', 'empresa_codigoEmpresa', 'particular_codigoParticular', 'empleado_codigoEmpleado', 'estadoMuestra_idEstado'
    ];
}
