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
        return view('blogs/details',[
            'blogs' => Blog::findOrFail($id),
        ]);
    }
}