<?php

use App\Http\Controllers\EditUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Auth;


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
Route::get('/', HomeController::class)->name('home');

Auth::routes();

//RUTA PARA EDITAR PERFIL USUARIO
Route::get('/UpdateProfile', [EditUserController::class, 'NewProfile'])->name('NewProfile')->middleware('auth');
Route::put('/changeProfile', [EditUserController::class, 'changeProfile'])->name('changeProfile');

// RUTA PARA CAMBIO DE CONTRASEÑA
Route::get('/UpdatePassword' , [EditUserController::class, 'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password', [EditUserController::class, 'changePassword'])->name('changePassword');

//RUTAS PARA EL CARRRITO DE COMPRAS
Route::get('carrito-ver', [CartController::class, 'index'])->name('ver.carrito');
Route::post('carrito-agregar', [CartController::class, 'addCart'])->name('add.carrito');
Route::get('carrito-limpiar', [CartController::class, 'clearCart'])->name('clear.carrito');
Route::post('carrito-remover', [CartController::class, 'removeItemCart'])->name('removeitem.carrito');
// Route::post('traer-productos', [CartController::class, 'traeProductosCarrito']);
Route::group(['middleware' => ['permission:AdminLte.ventas.create']], function(){
 Route::post('crear-venta', [VentaController::class, 'store'])->name('crear.venta');
 Route::get('factura-venta/{venta}', [VentaController::class, 'generarPDFFactura'])->name('factura.venta');
});
//Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
