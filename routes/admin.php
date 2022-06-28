<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\controllers\ProveedorController;
use App\Http\controllers\VentaController;


Route::group(['middleware' => ['permission:admin.home']], function(){

    Route::get('',function(){
        return view('layouts.app');
    })->name('admin.home');

    // RUTAS PARA LAS VISTAS DEL ADMINLTE


    //RUTAS ADMIN USUARIOS
    Route::resource('/usuarios', UsuarioController::class)
        ->only(['index','create','store','edit','update','destroy'])
        ->names('usuarios');

    Route::get('usuarios/{user}', [UsuarioController::class, 'mostrarFormRol'])->name('usuarios.asignar');
    Route::post('usuarios/{user}', [UsuarioController::class, 'asignarRol']);

    //RUTAS ADMIN PRODUCTOS
    Route::resource('/productos', ProductoController::class)->except('show')->names('AdminLte.productos');

    Route::patch('productos', [ProductoController::class, 'activarProducto'])->name('productos.active');

    //RUTAS ADMIN CATEGORIAS
    Route::resource('/categorias', CategoriaController::class)->except('show')->names('AdminLte.categorias');

    //RUTAS ADMIN PROVEEDORES
    Route::resource('/proveedores', ProveedorController::class)->except('show')->names('AdminLte.proveedors');

    //RUTAS ADMIN VENTAS
    Route::resource('/ventas', VentaController::class)
        ->only('index','store','destroy')
        ->names('AdminLte.ventas');

    //RUTAS PARA GENERACION DE PDFs
    Route::post('ventas', [VentaController::class,'generarPDFRango'])->name('reporte.venta.rango');


});
