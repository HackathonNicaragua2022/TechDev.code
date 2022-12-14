<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaTiendaController;
use App\Http\Controllers\CategoriaProductoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreDetailController;
use App\Http\Controllers\CrearTiendaParteIIController;


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
Route:: view ('/', 'login' )-> name('login');
Route:: view ('/', 'register' )-> name('register');

Route::get('/', function () {
    return view('home');
});

Route::resource('categorias', CategoriaTiendaController::class);
Route::resource('categorias-productos', CategoriaProductoController::class);
Route::resource('user', UserController::class);
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tienda', [App\Http\Controllers\TiendaController::class, 'index'])->name('tienda');
Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutus');

Route::resource('storeDetail', StoreDetailController::class);
Route::get('/crearTienda', [App\Http\Controllers\CrearTiendaController::class, 'index'])->name('crearTienda');
Route::get('/crearTiendaParteII', [App\Http\Controllers\CrearTiendaParteIIController::class, 'index'])->name('crearTiendaParteII');
