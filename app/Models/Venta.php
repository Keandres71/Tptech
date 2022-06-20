<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $codigo
 * @property $iduser
 * @property $productos
 * @property $iva
 * @property $total
 * @property $neto
 * @property $metodo_pago
 * @property $fecha_venta
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'iduser' => 'required',
		'productos' => 'required',
		'iva' => 'required',
		'total' => 'required',
		'neto' => 'required',
		'metodo_pago' => 'required',
		'fecha_venta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','iduser','productos','iva','total','neto','metodo_pago','fecha_venta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'iduser');
    }
    

}
