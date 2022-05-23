<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
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
    Route::get('usuarios/create', 'store')->name('usuarios.create');
    Route::get('usuarios/{usuario}', 'show')->name('usuarios.id');
});

Route::controller(ProductoController::class)->group(function(){ 
    Route::get('productos', 'index')->name('productos.index');
    Route::get('productos/create', 'store')->name('productos.create');
    Route::get('productos/{producto}', 'show')->name('productos.id');
});




