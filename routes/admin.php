<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\controllers\ProveedorController;
use App\Http\controllers\VentaController;


Route::get('',function(){
    return view('layouts.app');
});

// RUTAS PARA LAS VISTAS DEL ADMINLTE


//RUTAS ADMIN USUARIOS
Route::resource('/usuarios', UsuarioController::class)->names('usuarios');

//RUTAS ADMIN PRODUCTOS
Route::resource('/productos', ProductoController::class)
    ->only('index','create','store','edit','update','destroy')
    ->names('AdminLte.productos');

Route::patch('productos', [ProductoController::class, 'activarProducto'])->name('productos.active');

//RUTAS ADMIN CATEGORIAS
Route::resource('/categorias', CategoriaController::class)
    ->only('index','create','store','edit','update','destroy')
    ->names('AdminLte/categorias');

//RUTAS ADMIN PROVEEDORES
Route::resource('/proveedores', ProveedorController::class)
    ->only('index','create','store','edit','update','destroy')
    ->names('AdminLte.proveedors');

//RUTAS ADMIN VENTAS
Route::resource('/ventas', VentaController::class)
    ->only('index','create','store','edit','update','destroy')
    ->names('AdminLte.ventas');

//RUTAS PARA GENERACION DE PDFs
Route::post('ventas', [VentaController::class,'generarPDFRango'])->name('reporte.venta.rango');