<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Usuario extends Model
{
    use HasFactory;


    // Especificando la tabla de que va a utilizar el modelo
    protected $table = "usuarios";

    protected $fillable = [
        'nombre',
        'apellido',
        'tipo_doc',
        'num_doc',
        'fecha_nac',
        'email',
        'contraseña'
    ];

    protected $hidden = [
        'contraseña' 
    ];

    protected function nombre(): Attribute
    { 
        return new Attribute(
            set: function($value){
                return strtoupper($value);
            }, 

            get:function($value){
                return ucwords($value);
            }
        );

    }
}
