<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'idcag' => 1,
            'idpro' => 1,
            'nombre' => 'Producto 1',
            'descripcion' => 'Descripcion producto 1',
            'val_unit' => '10000',
            'stock' => '100',
        ]);
        Producto::create([
            'idcag' => 1,
            'idpro' => 1,
            'nombre' => 'Producto 2',
            'descripcion' => 'Descripcion producto 2',
            'val_unit' => '10000',
            'stock' => '100',
        ]);
        Producto::create([
            'idcag' => 1,
            'idpro' => 1,
            'nombre' => 'Producto 3',
            'descripcion' => 'Descripcion producto 3',
            'val_unit' => '10000',
            'stock' => '100',
        ]);
        Producto::create([
            'idcag' => 1,
            'idpro' => 1,
            'nombre' => 'Producto 4',
            'descripcion' => 'Descripcion producto 4',
            'val_unit' => '10000',
            'stock' => '100',
        ]);
        Producto::create([
            'idcag' => 1,
            'idpro' => 1,
            'nombre' => 'Producto 5',
            'descripcion' => 'Descripcion producto 5',
            'val_unit' => '10000',
            'stock' => '100',
        ]);
    }
}
