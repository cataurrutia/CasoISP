<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'rutEmpleado', 'nombreEmpleado', 'passwordEmpleado', 'emailEmpleado', 'categoriaEm_idCategoria', 'estadoUsuario_idEstado'
    ];
}
