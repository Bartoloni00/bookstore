<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBooksController extends Controller
{
    public function index()
    {
        return view('admin/books/index');
    }

    public function createView()
    {
        return view('admin/books/add');
    }

    public function createProcess(Request $request)
    {
        echo '<pre>';
        dd($request);// igual a print_r pero evita bucles infinitos
        echo '</pre>';
    }
}
