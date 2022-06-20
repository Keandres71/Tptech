<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'tipo'
    ];

    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'idcag', 'id');
    }

}
