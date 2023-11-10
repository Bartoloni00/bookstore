<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    public function index()
    {
        return view('admin/authors/index',[
            'authors' => Author::all()
        ]);
    }

    public function createView()
    {
        return view('admin/authors/add');
    }
    public function createProcess(Request $request)
    {
        $data = $request->only(['name','lastname']);
        $request->validate(Author::CREATE_RULES,Author::ERROR_MESSAGES);

        Author::create($data);

        return redirect('admin/author')
            ->with('status.message','El Author: '. e($data['name'] . ' ' . e($data['lastname'] . ' fue creado con exito.')));
    }

    public function editView(int $id)
    {
        return view('admin/authors/edit',[
            'author' => Author::findOrFail($id)
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $author = Author::findOrFail($id);
        $request->validate(Author::CREATE_RULES,Author::ERROR_MESSAGES);
        $data = $request->except('_token');

        $author->update($data);

        return redirect('admin/author')
        ->with('status.message','El author: '. e($data['name']). ' ' . e($data['lastname']) . ' fue editado exitosamente.');
    }

    public function deleteView(int $id)
    {
        return view('admin/authors/delete',[
            'author' => Author::findOrFail($id)
        ]);
    }

    public function deleteProcess(int $id)
    {
        $author = Author::findOrFail($id);
        $author->delete();

        return redirect('admin/author')
        ->with('status.message','El author: '. e($author->name) . ' '. e($author->lastname). ' fue eliminado exitosamente.');
    }
}
