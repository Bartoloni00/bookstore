<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin/categories/index',[
            'categories' => Category::all()
        ]);
    }

    public function createView()
    {
        return view('admin/categories/add');
    }
    public function createProcess(Request $request)
    {
        $data = $request->only(['name']);

        $request->validate(Category::CREATE_RULES,Category::ERROR_MESSAGES);

        Category::create($data);

        return redirect('admin/books/add')
            ->with('status.message','El Categoria : '. e($data['name']) . ' fue creada con exito.');
    }

    public function editView(int $id)
    {
        return view('admin/categories/edit',[
            'category' => Category::findOrFail($id)
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $category = Category::findOrFail($id);
        $request->validate(Category::CREATE_RULES,Category::ERROR_MESSAGES);
        $data = $request->except('_token');

        $category->update($data);

        return redirect('admin/category')
        ->with('status.message','La categoria: '. e($data['name']) . ' fue editada exitosamente.');
    }

    public function deleteView(int $id)
    {
        return view('admin/categories/delete',[
            'category' => Category::findOrFail($id)
        ]);
    }

    public function deleteProcess(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('admin/category')
        ->with('status.message','La categoria: '. e($category->name) . ' fue eliminada exitosamente.');
    }
}
