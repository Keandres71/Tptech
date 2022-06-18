<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\controllers\ProovedorController;


Route::get('',function(){ 
    return "hola";
});

// RUTAS PARA LAS VISTAS DEL ADMINLTE


//RUTAS ADMIN USUARIOS
Route::resource('/usuarios', UsuarioController::class)->names('usuarios');

//RUTAS ADMIN PRODUCTOS
Route::resource('/productos', ProductoController::class)->names('Adminlte/productos');

//RUTAS ADMIN CATEGORIAS
Route::resource('/categorias', CategoriaController::class)->names('AdminLte/categorias');

Route::controller(ProovedorController::class)->group(function(){
    Route::get('/proovedores', 'index')->name('proovedores.index');
    Route::get('/proovedores/create', 'store')->name('proovedores.create');
    Route::get('/proovedores/{producto}', 'show')->name('proovedores.id');
});