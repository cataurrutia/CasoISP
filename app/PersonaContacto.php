<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaContacto extends Model
{
    protected $fillable = [
        'rutContacto', 'nombreContacto', 'emailContacto', 'telefonoContacto', 'empresa_codigoEmpresa'
    ];
}
