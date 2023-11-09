<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Images;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
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

        if ($request->hasFile('image')) {
            $dataImage = $request->only(['alt']);
            $imageName = $request->file('image')->store('images');
            $dataImage['name'] = $imageName;

            $image = Images::create($dataImage);
            $imageID = $image->id;
        }

        $request->validate(Blog::CREATE_RULES,Blog::ERROR_MESSAGES);
        $data['release_date'] = now();
        $data['user_id'] = auth()->user()->id;
        $data['image_id'] = $imageID;
        
        Blog::create($data);

        return redirect('admin/blog')
        ->with('status.message','La categoria: '. e($data['title']) . ' fue agregado exitosamente.');
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
        $image = null;

        if ($blog->image_id !== null) {
            $image = Images::findOrFail($blog->image_id);
        }

        $request->validate(Blog::CREATE_RULES,Blog::ERROR_MESSAGES);
        $data = $request->except('_token');

        if ($request->hasFile('image')) {
            $dataImage = $request->only(['alt']);
            $imageName = $request->file('image')->store('images');
            $dataImage['name'] = $imageName;
            if($image) {
                try {
                    \Storage::delete($image->name);
                    $image->update($dataImage);
                    $image->save();
                } catch (\Throwable $error) {
                    return redirect('admin/blog')
                        ->with('status.message','El blog: '. e($data['title']) . ' no pudo actualizar su imagen.');
                }
            } else {
                try {
                    $image = Images::create($dataImage);
                    $data['image_id'] = $image->id;
                } catch (\Throwable $error) {
                    return redirect('admin/blog')
                        ->with('status.message','Al blog: '. e($data['title']) . ' no se le pudo agregar una imagen.');
                }
            }
        }

        $data['release_date'] = now();

        $blog->update($data);

        return redirect('admin/blog')
        ->with('status.message','El blog: '. e($data['title']) . ' fue editado exitosamente.');
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
                \Storage::delete($image->name);
                $blog->delete();
                $image->delete();
            } catch (\Throwable $error) {
                return redirect('admin/blog')
                    ->with('status.message','Ocurrio un error al eliminar la imagen del libro: '. e($blog->title));
            }
        }else {
            $blog->delete();

        }

        return redirect('admin/blog')
        ->with('status.message','El Libro: '. e($blog->title) . ' fue eliminado exitosamente.');
    }
}
