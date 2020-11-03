<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{   
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'categoria_id',
        'precio',
        'orden',
        'destacado',
        'estado',
    ];

    // public function getEstadoAttribute($value){
    //     if($value == 1){
    //         $estados = 'Activo';
    //     }else{
    //         $estados = 'Inactivo';
    //     }
    //     return $estados;
    // }

    public function categorias(){
        return $this->belongsTo('App\Models\Categorias','categoria_id');
    }
}
