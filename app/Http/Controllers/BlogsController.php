<?php
namespace App\Http\Controllers;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs/index');
    }
    public function details(int $id)
    {
        return view('blogs/details');
    }
}