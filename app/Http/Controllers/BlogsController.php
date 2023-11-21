<?php
namespace App\Http\Controllers;

use App\Models\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $Blog = Blog::paginate(4);
        return view('blogs/index', [
            'blogs' => $Blog,
        ]);
    }
    public function details(int $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->load(['category','user']);
        return view('blogs/details',[
            'blog' => $blog,
        ]);
    }
}