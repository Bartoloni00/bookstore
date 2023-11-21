<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Images;
use Illuminate\Support\Facades\DB;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('admin/blog/index',[
            'blogs' => $blogs
        ]);
    }

    public function createView()
    {
        return view('admin/blog/add',[
            'categories' => Category::all()
        ]);
    }

    public function createProcess(Request $request)
    {
        $dataImage = [];
        $imageID = null;
        $data = $request->only(['title','description','synopsis','categorie_id']);

        try {
            DB::beginTransaction();
            if ($request->hasFile('image')) {
                $dataImage = $request->only(['alt']);
                $imageName = $request->file('image')->store('images');
                Images::manipularImg($imageName, 160, 320);
                $dataImage['name'] = $imageName;
    
                $image = Images::create($dataImage);
                $imageID = $image->id;
            }
    
            $request->validate(Blog::CREATE_RULES,Blog::ERROR_MESSAGES);
            $data['release_date'] = now();
            $data['user_id'] = auth()->user()->id;
            $data['image_id'] = $imageID;
            
            Blog::create($data);
            DB::commit();
            return redirect('admin/blog')
            ->with('status.message','El blog: '. e($data['title']) . ' fue agregado exitosamente.');
        } catch (\Exception $e) {
            if ($imageID) {
                // Si se ha creado una imagen, elimina el registro de la base de datos
                $image = Images::find($imageID);
                if ($image) {
                    \Storage::delete($image->name); // Elimina el archivo del sistema de archivos
                }
            }
            DB::rollback();
            return redirect('admin/blog')
            ->with('status.message','El blog: '. e($data['title']) . ' no pudo ser agregado.');
        }
    }

    public function editView(int $id)
    {
        return view('admin/blog/edit',[
            'blog' => Blog::findOrFail($id),
            'categories' => Category::all(),
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        $image = $blog->image_id ? Images::findOrFail($blog->image_id) : null;
    
        $request->validate(Blog::CREATE_RULES, Blog::ERROR_MESSAGES);
        $data = $request->except('_token');
    
        try {
            DB::beginTransaction();
    
            if ($request->hasFile('image')) {
                $dataImage = $request->only(['alt']);
                $imageName = $request->file('image')->store('images');
                Images::manipularImg($imageName, 160, 320);

                $dataImage['name'] = $imageName;
    
                try {
                    if ($image) {
                        \Storage::delete($image->name);
                        $image->update($dataImage);
                    } else {
                        $image = Images::create($dataImage);
                        $data['image_id'] = $image->id;
                    }
                } catch (\Throwable $error) {
                    $message = $image ? 'actualizar su imagen.' : 'agregar una imagen.';
                    return redirect('admin/blog')
                        ->with('status.type', 'danger')
                        ->with('status.message', 'El blog: ' . e($data['title']) . ' no pudo ' . $message);
                }
            }
    
            $data['release_date'] = now();
            $blog->update($data);
    
            DB::commit();
            return redirect('admin/blog')
                ->with('status.message', 'El blog: ' . e($data['title']) . ' fue editado exitosamente.');
        } catch (\Exception $e) {
            DB::rollback();
            $action = $blog ? 'editado' : 'agregado';
            return redirect('admin/blog')
                ->with('status.type', 'danger')
                ->with('status.message', 'El blog: ' . e($data['title']) . ' no pudo ser ' . $action . '.');
        }
    }
    

    public function deleteView(int $id)
    {
        return view('admin/blog/delete',[
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function deleteProcess(int $id)
    {
        $blog = Blog::findOrFail($id);
        $image = null;

        if ($blog->image_id !== null) {
            try {
                $image = Images::findOrFail($blog->image_id);
                DB::transaction(function() use($image, $blog){
                    $blog->delete();
                    $image->delete();
                });
                \Storage::delete($image->name);
            } catch (\Throwable $error) {
                return redirect('admin/blog')
                    ->with('status.type','danger')
                    ->with('status.message','Ocurrio un error al eliminar la imagen del libro: '. e($blog->title));
            }
        }else {
            $blog->delete();

        }

        return redirect('admin/blog')
        ->with('status.message','El Libro: '. e($blog->title) . ' fue eliminado exitosamente.');
    }
}
