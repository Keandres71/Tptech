<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProovedorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//RUTA DE INICIO DE LA PAGINA
Route::get('/', HomeController::class);

// RUTAS DE USUARIOS
Route::controller(UsuarioController::class)->group(function(){
    Route::get('usuarios', 'index')->name('usuarios.index');
    Route::get('Adminlte/usuarios','index')->name('adminlte.index');
    Route::get('Adminlte/usuarios/create','create2')->name('adminlte.create2');
    Route::post('Adminlte/register', 'store2')->name('adminlte.store2');


    Route::get('login', 'login')->name('usuarios.login');
    Route::get('register', 'create')->name('usuarios.create');
    Route::post('usuarios','store')->name('usuarios.store');
    Route::get('perfil/{usuario}', 'show')->name('usuarios.show');
    Route::put('actualizar/{usuario}', 'update')->name('usuarios.update');
    Route::delete('eliminar/{usuario}', 'destroy')->name('usuarios.destroy');
});


Route::controller(ProductoController::class)->group(function(){ 
    Route::get('Adminlte/productos', 'index')->name('productos.index');
    Route::get('Adminlte/productos/create', 'store')->name('productos.create');
    Route::get('Adminlte/productos/{producto}', 'show')->name('productos.id');
});

Route::controller(ProovedorController::class)->group(function(){ 
    Route::get('Adminlte/proovedores', 'index')->name('proovedores.index');
    Route::get('Adminlte/proovedores/create', 'store')->name('proovedores.create');
    Route::get('Adminlte/proovedores/{producto}', 'show')->name('proovedores.id');
});

// Rutas de Categorias del AdminLTE

Route::resource('Adminlte/categorias', CategoriaController::class)->names('AdminLte/categorias');


