<?php

use Illuminate\Support\Facades\Route;

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
// Pagina de inicio
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

// Pagina acerca de nosotros
Route::get('quienes-somos', [\App\Http\Controllers\HomeController::class, 'about']);

// Pagina de servicios
// Route::get('/servicios',[\App\Http\Controllers\HomeController::class,'service']);

//Pagina de contacto
Route::get('/contacto',[\App\Http\Controllers\HomeController::class,'contact']);

// Pagina de legalidad
// Route::get('/legalidad',[\App\Http\Controllers\HomeController::class,'legality']);

// Preguntas frecuentas
// Route::get('/preguntas-frecuentes',[\App\Http\Controllers\HomeController::class,'faq']);

// Inicio de sesion o registro
// Route::get('/inicio-de-sesion',[\App\Http\Controllers\HomeController::class,'login']);

// Listado de propiedades // Busqueda avanzada
Route::get('/books/listado', [\App\Http\Controllers\BooksController::class, 'index']);

// Pagina de detalle de propiedad
Route::get('/books/{id}', [\App\Http\Controllers\BooksController::class, 'details'])
        ->whereNumber('id');//gracias a esto solo se podra acceder a esta ruta cuando se pasa un numero

// Route::get('/books/new', \App\Http\Controllers\BooksController::class);

Route::get('/blogs/listado', [\App\Http\Controllers\BlogsController::class, 'index']);

Route::get('/blogs/{id}', [\App\Http\Controllers\BlogsController::class, 'details'])->whereNumber('id');

Route::get('/admin/books', [\App\Http\Controllers\AdminBooksController::class, 'index']);
