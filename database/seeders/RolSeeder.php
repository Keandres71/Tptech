<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = Role::create(['name' => 'usuario.admin']);
        $rol2 = Role::create(['name' => 'usuario.empleado']);
        $rol3 = Role::create(['name' => 'usuario.cliente']);
        //Permisos administrativos
        Permission::create(['name' => 'admin.home'])->syncRoles([$rol1,$rol2]);
        //Permisos de usuarios
        Permission::create(['name' => 'usuarios.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'usuarios.create'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'usuarios.store'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'usuarios.edit'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'usuarios.update'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'usuarios.destroy'])->syncRoles([$rol1]);

        Permission::create(['name' => 'usuarios.asignar.rol'])->syncRoles([$rol1]);

        Permission::create(['name' => 'NewPassword'])->syncRoles([$rol1,$rol2,$rol3]);
        Permission::create(['name' => 'changePassword'])->syncRoles([$rol1,$rol2,$rol3]);
        //Permisos de productos
        Permission::create(['name' => 'AdminLte.productos.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.productos.create'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.productos.store'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.productos.edit'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.productos.update'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.productos.destroy'])->syncRoles([$rol1]);

        Permission::create(['name' => 'productos.active'])->syncRoles([$rol1,$rol2]);
        //Permisos de categorias
        Permission::create(['name' => 'AdminLte.categorias.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.categorias.create'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.categorias.store'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.categorias.edit'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.categorias.update'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.categorias.destroy'])->syncRoles([$rol1]);
        //Permisos de proveedores
        Permission::create(['name' => 'AdminLte.proveedors.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.proveedors.create'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.proveedors.store'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.proveedors.edit'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.proveedors.update'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.proveedors.destroy'])->syncRoles([$rol1]);

        Permission::create(['name' => 'proveedors.active'])->syncRoles([$rol1,$rol2]);
        //Permisos de ventas
        Permission::create(['name' => 'AdminLte.ventas.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.ventas.create'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.ventas.store'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.ventas.edit'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.ventas.update'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name' => 'AdminLte.ventas.destroy'])->syncRoles([$rol1]);

        Permission::create(['name' => 'reporte.venta.rango'])->syncRoles([$rol1]);
    }
}
