<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $fillable = [
        'nombre',
        'eslogan',
        'nit',
        'direccion',
        'barrio',
        'departamento',
        'ciudad',
        'pais',
        'pbx',
        'telefono',
        'celular',
        'fax',
        'email',
        'whatsapp',
        'facebook',
        'instagram',
    ];
}
