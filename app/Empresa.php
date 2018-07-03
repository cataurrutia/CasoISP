<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'rutEmpresa', 'nombreEmpresa', 'passwordEmpresa', 'direccionEmpresa', 'estadoUsuario_idEstado'
    ];
}
