<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Catalogo;
use App\Models\Carrito;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PedidoController;

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

// Rutas generales de la web

Route::get('/', function () { // home
    return view('home');
})->name('index');

Route::get('/productos', function () { // vista para mostrar todos los productos del catálogo
    $catalogos = Catalogo::all(); // guardamos los datos de la tabla en una variable
    return view('mostrarCatalogo', compact('catalogos')); // cargamos la vista que está en resources/views/catalogo/index
})->name('productos');

// Rutas de 'Catálogo'

Route::get('/admin', [CatalogoController::class, 'index'])->name('catalogos.index'); // mostrar todos
Route::get('/admin/create', [CatalogoController::class, 'create'])->name('catalogos.create'); // mostrar formulario para añadir producto
Route::post('/admin/store', [CatalogoController::class, 'store'])->name('catalogos.store'); // añadir producto
Route::get('/admin/show/{id}', [CatalogoController::class, 'show'])->name('catalogos.show'); // mostrar 1 producto
Route::get('/admin/{id}/edit', [CatalogoController::class, 'edit'])->name('catalogos.edit'); // mostrar formulario para editar producto
Route::patch('/admin/update/{catalogo}', [CatalogoController::class, 'update'])->name('catalogos.update'); // editar producto
Route::delete('/admin/delete/{id}', [CatalogoController::class, 'destroy'])->name('catalogos.destroy'); // borrar producto

// Rutas de 'Carrito'

Route::get('/carrito', function () { // mostrar el carrito con todos los productos añadidos
    $productos = Carrito::all();
    return view('carrito.index', compact('productos'));
})->name('carrito');
Route::post('/carrito/add/', [CarritoController::class, 'store'])->name('carrito.add');
Route::delete('/carrito/delete/{id}', [CarritoController::class, 'destroy'])->name('carrito.destroy');

// Rutas de 'Pedido'

Route::post('/pedido/store', [PedidoController::class, 'store'])->name('pedido.store'); // crear un nuevo pedido

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::put('/carrito/update/{id}', [CarritoController::class, 'update'])->name('carrito.update');

// Rutas de 'Otros'

Route::get('contacto', function () { // home
    return view('/otros/contacto');
})->name('contacto');

Route::get('trabaja', function () { // home
    return view('/otros/trabaja');
})->name('trabaja');