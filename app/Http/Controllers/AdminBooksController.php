<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Images;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBooksController extends Controller
{
    

    public function index()
    {
        //asi evitamos el lazyloading y tenemos menos consultas hacia la BD
        $books = Book::with(['category','author','user','image'])->paginate(10);

        return view('admin/books/index', [
            'books' => $books
        ]);
    }

    public function createView()
    {
        return view('admin/books/add',[
            'categories' => Category::all(),
            'authors' => Author::all()
        ]);
    }

    public function createProcess(Request $request)
    {
        $dataImage = [];
        $imageID = null;

        $dataBook = $request->only(['title','description','price','synopsis','release_date','categorie_id','author_id']);
        $dataBook['user_id'] = auth()->user()->id;
        // dd($dataBook);
        try {
            
            DB::beginTransaction(); // Inicio la transaccion SQL
                
            if ($request->hasFile('image')) {
                $dataImage = $request->only(['alt']);
                $imageName = $request->file('image')->store('images'); // Corregir que la imagen no se agregue si falla la transaccion
                $dataImage['name'] = $imageName;

                // $request->validate(Images::CREATE_RULES, Images::ERROR_MESSAGES);
                
                $image = Images::create($dataImage);
                $imageID = $image->id;
            }
            
            $request->validate(Book::CREATE_RULES,Book::ERROR_MESSAGES);

            $dataBook['user_id'] = auth()->user()->id;
            $dataBook['image_id'] = $imageID;
            // dd($dataBook);
            Book::create($dataBook);

            DB::commit(); // Finalizo la transaccion SQL
            return redirect('/admin/books')
                ->with('status.message','El Libro: '. e($dataBook['title']) . ' fue agregado exitosamente.');
        } catch (\Exception $e) {
            DB::rollback(); // desago las acciones creadas previamente en la base de datos en caso de que alguna falle SQL
            return redirect('/admin/books')
                ->with('status.type','danger')
                ->with('status.message','El Libro: '. e($dataBook['title']) . ' no pudo ser agregado.');
        }
    }

    public function editView(int $id)
    {
        return view('admin/books/edit',[
            'book' => Book::findOrFail($id),
            'categories' => Category::all(),
            'authors' => Author::all()
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $book = Book::findOrFail($id);
        $image = null;
    
        if ($book->image_id !== null) {
            $image = Images::findOrFail($book->image_id);
        }
    
        $request->validate(Book::CREATE_RULES, Book::ERROR_MESSAGES);
        $data = $request->except('_token');
        
       try {
        DB::beginTransaction(); // Inicio la transaccion SQL

        if ($request->hasFile('image')) {
            $dataImage = $request->only(['alt']);
            $imageName = $request->file('image')->store('images');
            $dataImage['name'] = $imageName;
            if ($image) {
                // Si existe una imagen asociada al libro, actualiza la imagen existente.
               try {
                    \Storage::delete($image->name);
                    $image->update($dataImage);
                    $image->save();
               } catch (\Throwable $error) {
                    return redirect('admin/books')
                        ->with('status.type','danger')
                        ->with('status.message', 'Al Libro: ' . e($data['title']) . ' no se le pudo actualizar la imagen.'. e($error));
               }
            } else {
                // Si no hay una imagen asociada al libro, crea una nueva imagen.
                try {
                    $image = Images::create($dataImage);
                    $data['image_id'] = $image->id; // Asocia la imagen al libro.
                } catch (\Throwable $error) {
                    return redirect('admin/books')
                        ->with('status.type','danger')
                        ->with('status.message', 'Al Libro: ' . e($data['title']) . ' no se le pudo agregar una imagen.');
                }
            }
        }
        $book->update($data);
        DB::commit(); // Finalizo la transaccion SQL
    
        return redirect('admin/books')
            ->with('status.message', 'El Libro: ' . e($data['title']) . ' fue editado exitosamente.');
       } catch (\Exception $e) {
            DB::rollback(); // desago las acciones creadas previamente en la base de datos en caso de que alguna falle SQL

            return redirect('admin/books')
                        ->with('status.type','danger')
                        ->with('status.message', 'Al Libro: ' . e($data['title']) . ' no pudo ser editado.');
       }
    }
    
    public function deleteView(int $id)
    {
        return view('admin/books/delete',[
            'book' => Book::findOrFail($id),
            'author' => Author::All(),
            'image' => Images::All(),
            'category' => Category::All()
        ]);
    }

    public function deleteProcess(int $id)
    {
        $book = Book::findOrFail($id);
        $image = null;

        if ($book->image_id !== null) {
            try {
                $image = Images::findOrFail($book->image_id);
                DB::transaction(function() use ($image, $book){
                    \Storage::delete($image->name);// Corregir el porque se elimina esta imagen si falla la transaccion
                    $book->delete();
                    $image->delete();
                }); // otra sintaxis para las transacciones SQL
            } catch (\Exception $error) {
                return redirect('admin/books')
                    ->with('status.type','danger')
                    ->with('status.message','Ocurrio un error al eliminar la imagen del libro: '. e($book->title));
            }
        } else {
            $book->delete();
        }
        

        return redirect('admin/books')
            ->with('status.message','El Libro: '. e($book->title) . ' fue eliminado exitosamente.');
    }
}
