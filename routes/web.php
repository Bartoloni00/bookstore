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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
        ->name('home');// esto me permite llamar a la ruta por su nombre en lugar de por url (uso de la funcion route())

Route::get('/quienes-somos', [\App\Http\Controllers\HomeController::class, 'about'])// asi llamamos al controlador y su metodo sin utilizar los grupos
	->name('about_us');
Route::get('/contacto',[\App\Http\Controllers\HomeController::class,'contact'])
	->name('contact');
Route::post('/contacto',[\App\Http\Controllers\HomeController::class,'contactResult'])
	->name('contact.result');


// Inicio de sesion o registro
Route::controller(\App\Http\Controllers\AuthController::class)->group(function(){
        Route::get('/iniciar-sesion','login')
        	->name('login');

        Route::post('/iniciar-sesion','loginProcess')
                ->name('login.process');

        Route::get('/registrar-usuario','createView')
                ->name('user.create.view');

        Route::post('/registrar-usuario','createProcess')
                ->name('user.create.process');

        Route::post('cerrar-sesion','logoutProcess')
                ->name('logout');
});
Route::controller(\App\Http\Controllers\BooksController::class)->group(function(){
        // Listado de propiedades // Busqueda avanzada
        Route::get('/books/listado','index')
                ->name('books');
        // Pagina de detalle de propiedad
        Route::get('/books/{id}','details')
                ->whereNumber('id');//gracias a esto solo se podra acceder a esta ruta cuando se pasa un numero
        Route::middleware('auth')->group(function(){
                // Route::post('/book/buy/{id}','buy')
                // ->name('book.buy'); Todo comprar libros
                Route::get('/book/mybooks','myBooks')
                ->name('books.my');
        });
        }); 
Route::controller(\App\Http\Controllers\BlogsController::class)->group(function(){
	Route::get('/blogs/listado','index')
		->name('blogs');

	Route::get('/blogs/{id}','details')
		->whereNumber('id');
});
Route::middleware(['auth','is.admin'])->group(function(){// le pune el middleware de autentificacion a todos los del grupo
Route::prefix('admin')->group(function(){// Agrega el prefijo 'admin' a todas las rutas
        Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])
        ->name('dashboard');

        Route::controller(\App\Http\Controllers\AdminBooksController::class)->group(function(){
                Route::get('/books', 'index')
                        ->name('admin.books');
                Route::name('book.')->group(function(){
                        Route::get('/books/add', 'createView')
                                ->name('create.view');

                        Route::post('/books/add', 'createProcess')
                                ->name('create.process');

                        Route::get('/books/{id}/edit', 'editView')
                                ->name('edit.view');
                        Route::post('/books/{id}/edit', 'editProcess')
                                ->name('edit.process');

                        Route::get('/books/{id}/delete', 'deleteView')
                                ->name('delete.view');
                        Route::post('/books/{id}/delete', 'deleteProcess')
                                ->name('delete.process');
                });
        });

        Route::controller(\App\Http\Controllers\AdminBlogController::class)->group(function(){
                Route::get('/blog', 'index')
                ->name('admin.blogs');

                Route::name('blog.')->group(function(){
                        Route::get('/blog/add','createView')
                        ->name('create.view');
                        Route::post('/blog/add','createProcess')
                                ->name('create.process');

                        Route::get('/blog/{id}/edit','editView')
                                ->name('edit.view');
                        Route::post('/blog/{id}/edit','editProcess')
                                ->name('edit.process');

                        Route::get('/blog/{id}/delete','deleteView')
                                ->name('delete.view');
                        Route::post('/blog/{id}/delete','deleteProcess')
                                ->name('delete.process');
                });
        });

        Route::controller(\App\Http\Controllers\AdminAuthorController::class)->group(function(){
                Route::get('/author','index')
                ->name('admin.authors');
                Route::name('author.')->group(function(){
                        Route::get('/author/add','createView')
                        ->name('create.form');
                        Route::post('/author/add','createProcess')
                                ->name('create.process');
                        Route::get('/author/{id}/edit','editView')
                                ->name('edit.form');
                        Route::post('/author/{id}/edit','editProcess')
                                ->name('edit.process');
                        Route::get('/author/{id}/delete','deleteView')
                                ->name('delete.form');
                        Route::post('/author/{id}/delete','deleteProcess')
                                ->name('delete.process');
                });
        });

        Route::controller(\App\Http\Controllers\AdminCategoryController::class)->group(function(){
                Route::get('/category','index')
                ->name('admin.categories');
                Route::name('category.')->group(function(){
                        Route::get('/category/add','createView')
                        ->name('create.form');
                        Route::post('/category/add','createProcess')
                                ->name('create.process');
                        Route::get('/category/{id}/edit','editView')
                                ->name('edit.form');
                        Route::post('/category/{id}/edit','editProcess')
                                ->name('edit.process');
                                Route::get('/category/{id}/delete','deleteView')
                                ->name('delete.form');
                        Route::post('/category/{id}/delete','deleteProcess')
                                ->name('delete.process');
                });
        });

        Route::controller(\App\Http\Controllers\AdminUserController::class)->group(function(){
                Route::get('/users','index')
                ->name('admin.users');
                Route::name('users.')->group(function(){
                        Route::get('/users/{id}/edit','editView')
                        ->name('edit.form');
                        Route::post('/users/{id}/edit','editProcess')
                                ->name('edit.proces');
                        Route::get('/users/{id}/delete','deleteView')
                                ->name('delete.form');
                        Route::post('/users/{id}/delete','deleteProcess')
                                ->name('delete.proces');
                });
        });
});
});