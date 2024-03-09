<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Models\Catalogo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { // vista para mostrar todos los productos del catálogo
    $catalogos = Catalogo::all(); // guardamos los datos de la tabla en una variable
    return view('catalogo.index', compact('catalogos')); // cargamos la vista que está en resources/views/catalogo/index
})->name('productos');

Route::get('/vista2', function () {
    return view('vista2');
})->name('vista2');

Route::get('/vista3', function () {
    return view('vista3');
})->name('vista3');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
