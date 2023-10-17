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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
        ->name('home');// esto me permite llamar a la ruta por su nombre en lugar de por url (uso de la funcion route())

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
Route::get('/iniciar-sesion',[\App\Http\Controllers\AuthController::class,'login'])
        ->name('login');

Route::post('/iniciar-sesion',[\App\Http\Controllers\AuthController::class,'loginProcess'])
        ->name('login.process');

Route::get('/registrar-usuario',[\App\Http\Controllers\AuthController::class,'createView'])
        ->name('user.create.view');

Route::post('/registrar-usuario',[\App\Http\Controllers\AuthController::class,'createProcess'])
        ->name('user.create.process');

Route::post('cerrar-sesion',[\App\Http\Controllers\AuthController::class,'logoutProcess'])
        ->name('logout')
        ->middleware('auth');
// Listado de propiedades // Busqueda avanzada
Route::get('/books/listado', [\App\Http\Controllers\BooksController::class, 'index'])
        ->name('books');
// Pagina de detalle de propiedad
Route::get('/books/{id}', [\App\Http\Controllers\BooksController::class, 'details'])
        ->whereNumber('id');//gracias a esto solo se podra acceder a esta ruta cuando se pasa un numero
        
Route::get('/blogs/listado', [\App\Http\Controllers\BlogsController::class, 'index']);

Route::get('/blogs/{id}', [\App\Http\Controllers\BlogsController::class, 'details'])
        ->whereNumber('id');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])
        ->name('dashboard')
        ->middleware('auth');

Route::get('/admin/books', [\App\Http\Controllers\AdminBooksController::class, 'index'])
        ->middleware('auth')
        ->name('admin.books');

Route::get('/admin/books/add', [\App\Http\Controllers\AdminBooksController::class, 'createView'])
        ->middleware('auth')
        ->name('create.book.view');
Route::post('/admin/books/add', [\App\Http\Controllers\AdminBooksController::class, 'createProcess'])
        ->middleware('auth')
        ->name('create.book.process');

Route::get('/admin/books/{id}/edit', [\App\Http\Controllers\AdminBooksController::class, 'editView'])
        ->middleware('auth');
Route::post('/admin/books/{id}/edit', [\App\Http\Controllers\AdminBooksController::class, 'editProcess'])
        ->middleware('auth');

Route::get('/admin/books/{id}/delete', [\App\Http\Controllers\AdminBooksController::class, 'deleteView'])
        ->middleware('auth');
Route::post('/admin/books/{id}/delete', [\App\Http\Controllers\AdminBooksController::class, 'deleteProcess'])
        ->middleware('auth');

Route::get('/admin/blog', [\App\Http\Controllers\AdminBlogController::class, 'index'])
        ->middleware('auth')
        ->name('admin.blogs');

Route::get('/admin/blog/add', [\App\Http\Controllers\AdminBlogController::class, 'createView'])
        ->middleware('auth')
        ->name('create.blog.view');
Route::post('/admin/blog/add', [\App\Http\Controllers\AdminBlogController::class, 'createProcess'])
        ->middleware('auth')
        ->name('create.blog.process');

Route::get('/admin/blog/{id}/edit', [\App\Http\Controllers\AdminBlogController::class, 'editView'])
        ->middleware('auth')
        ->name('edit.blog.view');
Route::post('/admin/blog/{id}/edit', [\App\Http\Controllers\AdminBlogController::class, 'editProcess'])
        ->middleware('auth')
        ->name('edit.blog.process');

Route::get('/admin/blog/{id}/delete', [\App\Http\Controllers\AdminBlogController::class, 'deleteView'])
        ->middleware('auth')
        ->name('delete.blog.view');
Route::post('/admin/blog/{id}/delete', [\App\Http\Controllers\AdminBlogController::class, 'deleteProcess'])
        ->middleware('auth')
        ->name('delete.blog.process');

Route::get('/admin/author',[\App\Http\Controllers\AdminAuthorController::class, 'index'])
        ->middleware('auth')
        ->name('admin.authors');
Route::get('/admin/author/add', [\App\Http\Controllers\AdminAuthorController::class, 'createView'])
        ->middleware('auth')
        ->name('author.create.form');
Route::post('/admin/author/add', [\App\Http\Controllers\AdminAuthorController::class, 'createProcess'])
        ->middleware('auth')
        ->name('author.create.process');
Route::get('/admin/author/{id}/edit', [\App\Http\Controllers\AdminAuthorController::class, 'editView'])
        ->middleware('auth')
        ->name('author.edit.form');
Route::post('/admin/author/{id}/edit', [\App\Http\Controllers\AdminAuthorController::class, 'editProcess'])
        ->middleware('auth')
        ->name('author.edit.process');
Route::get('/admin/author/{id}/delete', [\App\Http\Controllers\AdminAuthorController::class, 'deleteView'])
        ->middleware('auth')
        ->name('author.delete.form');
Route::post('/admin/author/{id}/delete', [\App\Http\Controllers\AdminAuthorController::class, 'deleteProcess'])
        ->middleware('auth')
        ->name('author.delete.process');


Route::get('admin/category',[\App\Http\Controllers\AdminCategoryController::class,'index'])
        ->middleware('auth')
        ->name('admin.categories');
Route::get('/admin/category/add', [\App\Http\Controllers\AdminCategoryController::class, 'createView'])
        ->middleware('auth')
        ->name('category.create.form');
Route::post('/admin/category/add', [\App\Http\Controllers\AdminCategoryController::class, 'createProcess'])
        ->middleware('auth')
        ->name('category.create.process');
Route::get('/admin/category/{id}/edit', [\App\Http\Controllers\AdminCategoryController::class, 'editView'])
        ->middleware('auth')
        ->name('category.edit.form');
Route::post('/admin/category/{id}/edit', [\App\Http\Controllers\AdminCategoryController::class, 'editProcess'])
        ->middleware('auth')
        ->name('category.edit.process');
        Route::get('/admin/category/add', [\App\Http\Controllers\AdminCategoryController::class, 'createView'])
        ->middleware('auth')
        ->name('category.create.form');
Route::post('/admin/category/add', [\App\Http\Controllers\AdminCategoryController::class, 'createProcess'])
        ->middleware('auth')
        ->name('category.create.process');



Route::get('admin/users',[\App\Http\Controllers\AuthController::class, 'index'])
        ->middleware('auth')
        ->name('admin.users');