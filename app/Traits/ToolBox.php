<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ToolBox{

    /* método que recibe el nombre de un archivo y lo adapta para almacenarlo */
    public static function nombreArchivo($string){
        $string = substr(md5(uniqid(rand())),0,6).'_'.$string;
        $ext = Str::afterLast($string,'.');
        $string = Str::beforeLast($string,'.');
        $string = Str::slug($string);        
        $string .= '.'.$ext;        
        return $string;
    }
}