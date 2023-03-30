<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserFormRequest $resquest)
    {
        $validatedData = $resquest->validated();

        $user = new User;
        $user->name =  $validatedData['name'];
        $user->email =  $validatedData['email'];

        $user->save();

        return redirect('admin/user')->with('message', 'user creer avec success');
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserFormRequest $resquest, $user)
    {
        $user = User::findOrFail($user);

        $validatedData = $resquest->validated();

        
        $user->name =  $validatedData['name'];
        $user->email =  $validatedData['email'];

        $user->update();

        return redirect('admin/user')->with('message', 'user modifier avec success');
    }
}
