<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $idcag
 * @property $idpro
 * @property $nombre
 * @property $descripcion
 * @property $val_unit
 * @property $active
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property DellFactura[] $dellFacturas
 * @property Proveedor $proveedor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'idcag' => 'required',
		'idpro' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'val_unit' => 'required',
        'stock' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idcag','idpro','nombre','descripcion','val_unit','active','stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'idcag');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dellFacturas()
    {
        return $this->hasMany('App\Models\DellFactura', 'idproduct', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedor()
    {
        return $this->hasOne('App\Models\Proveedor', 'id', 'idpro');
    }
    

}
