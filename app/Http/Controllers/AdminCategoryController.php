<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function createView()
    {
        return view('admin/categories/add');
    }
    public function createProcess(Request $request)
    {
        $data = $request->only(['name']);
        // echo '<pre>';
        // dd($data);
        // echo '<pre>';
        $request->validate(Category::CREATE_RULES,Category::ERROR_MESSAGES);

        Category::create($data);

        return redirect('admin/books/add')
            ->with('status.message','El Categoria : '. e($data['name']) . ' fue creado con exito.');
    }
}
