<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProovedorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RegisterController;

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


Route::resource('Adminlte/usuarios', UsuarioController::class)->names('usuarios');

/* Route::get('/register', function(){ 
    return view('auth.register');
});
Route::get('/login', function(){ 
    return view('auth.login');
}); */

Route::get('/register', [RegisterController::class, 'show'])->name('auth.show');
Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');

Route::resource('Adminlte/productos', ProductoController::class)->names('Adminlte/productos');





Route::controller(ProovedorController::class)->group(function(){
    Route::get('Adminlte/proovedores', 'index')->name('proovedores.index');
    Route::get('Adminlte/proovedores/create', 'store')->name('proovedores.create');
    Route::get('Adminlte/proovedores/{producto}', 'show')->name('proovedores.id');
});

// Rutas de Categorias del AdminLTE

Route::resource('Adminlte/categorias', CategoriaController::class)->names('AdminLte/categorias');


