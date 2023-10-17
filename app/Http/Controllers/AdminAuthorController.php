<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    public function createView()
    {
        return view('admin/authors/add');
    }
    public function createProcess(Request $request)
    {
        $data = $request->only(['name','lastname']);
        // echo '<pre>';
        // dd($data);
        // echo '<pre>';
        $request->validate(Author::CREATE_RULES,Author::ERROR_MESSAGES);

        Author::create($data);

        return redirect('admin/books/add')
            ->with('status.message','El Author: '. e($data['name'] . ' ' . e($data['lastname'] . ' fue creado con exito.')));
    }
}
