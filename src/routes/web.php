<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

// User Web Routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/{departamento}', [App\Http\Controllers\HomeController::class, 'departamento'])->name('departamento');
Route::get('/{categoria}', [App\Http\Controllers\HomeController::class, 'categoria'])->name('categoria');
Route::get('/{subcategoria}', [App\Http\Controllers\HomeController::class, 'subcategoria'])->name('subcategoria');
Route::get('/producto/{producto}', [App\Http\Controllers\HomeController::class, 'producto'])->name('producto');

// Admin Routes
Route::group(['middleware' => ['role:admin']], function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/banner', App\Http\Controllers\BannerController::class);
    Route::resource('/departamentos', App\Http\Controllers\DepartamentoController::class);
    Route::resource('/categorias', App\Http\Controllers\CategoriaController::class);
});