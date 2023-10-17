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

        return redirect('/admin/blog')
        ->with('status.message','La categoria: '. e($data['title']) . ' fue agregado exitosamente.');
    }
}
