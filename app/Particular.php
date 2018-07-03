<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    protected $fillable = [
        'rutParticular', 'nombreParticular', 'passwordParticular' ,'direccionParticular', 'emailParticular', 'telefonoParticular', 'estadoUsuario_idEstado'
    ];
}
