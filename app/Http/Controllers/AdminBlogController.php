<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

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
        $data = $request->only(['title','description','synopsis','categorie_id']);

        $request->validate(Blog::CREATE_RULES,Blog::ERROR_MESSAGES);

        $data['release_date'] = now();
        $data['user_id'] = auth()->user()->id;
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
        $request->validate(Blog::CREATE_RULES,Blog::ERROR_MESSAGES);
        $data = $request->except('_token');
        $data['release_date'] = now();

        $blog->update($data);

        return redirect('admin/blog')
        ->with('status.message','El blog: '. e($data['title']) . 'fue editado exitosamente.');
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
        $blog->delete();

        return redirect('admin/blog')
        ->with('status.message','El Libro: '. e($blog->title) . ' fue eliminado exitosamente.');
    }
}
