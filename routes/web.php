<?php

use App\Http\Controllers\EditUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProovedorController;


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

Auth::routes();

Route::get('/UpdateProfile' , [EditUserController::class, 'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password', [EditUserController::class, 'changePassword'])->name('changePassword');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
