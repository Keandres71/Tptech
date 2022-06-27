<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Proveedor
 *
 * @property $id
 * @property $rsoc
 * @property $dire
 * @property $tel
 * @property $email
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    public $timestamps = false;
    static $rules = [
		'rsoc' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rsoc','dire','tel','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'idpro', 'id');
    }




}
