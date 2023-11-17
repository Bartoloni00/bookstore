<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin/users/index',[
            'users' => User::paginate(15)
        ]);
    }

    public function editView(int $id)
    {
        return view('admin/users/edit',[
            'user' => User::findOrFail($id)
        ]);
    }

    public function editProcess(int $id, Request $request)
    {
        $user = User::findOrFail($id);
        $request->validate(User::CREATE_RULES_EDIT,User::ERROR_MESSAGES_EDIT);
        $data = $request->except('_token');
        $user['updated_at'] = now();
        $user->update($data);

        return redirect('admin/users')
        ->with('status.message','El Usuario: '. e($data['name']). ' fue editado exitosamente.');
    }

    public function deleteView(int $id)
    {
        return view('admin/users/delete',[
            'user' => User::findOrFail($id)
        ]);
    }

    public function deleteProcess(int $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('admin/users')
        ->with('status.message','El usuario: '. e($user->name) . ' fue eliminado exitosamente.');
    }
}
