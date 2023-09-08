<?php
namespace App\Http\Controllers;

class BooksController extends Controller
{
    public function index()
    {
        return view('books/index');
    }
    public function details()
    {
        return view('books/details');
    }
}