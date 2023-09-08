<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBooksController extends Controller
{
    public function index()
    {
        return view('admin/books/index');
    }
}
