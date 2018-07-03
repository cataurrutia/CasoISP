<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoAnalisis extends Model
{
    protected $fillable = [
        'presenciaElemento', 'concentracionElemento', 'analisis_codigoAnalisis'
    ];
}
