<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Proveedor
 *
 * @property $id
 * @property $nit
 * @property $dire
 * @property $tel
 * @property $email
 * @property $active
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    public $timestamps = false;
    static $rules = [
		'nit' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nit','dire','tel','email','active'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'idpro', 'id');
    }




}
