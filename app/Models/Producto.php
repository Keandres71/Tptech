<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
protected $fillable = ['idcag', 'idpro', 'nombre', 'descripcion', 'val_unit', /*'estatus'*/];


}
