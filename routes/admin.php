<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;


Route::get('',function(){ 
    return "hola";
});

// RUTAS PARA LAS VISTAS DEL ADMINLTE

Route::controller(ProductoController::class)->group(function(){ 
    Route::get('productos', 'index')->name('productos.index');
    Route::get('productos/create', 'store')->name('productos.create');
    Route::get('productos/{producto}', 'show')->name('productos.id');
});


