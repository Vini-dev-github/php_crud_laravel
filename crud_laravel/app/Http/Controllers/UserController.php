<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        //$users = $this->user->all();
        $users = User::all();
        return view('users', compact('users'));
    }


    public function create()
    {
        return view('user_create');
    }


    public function store(Request $request)
    {
        $created = $this->user->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => password_hash($request->input('password'), PASSWORD_DEFAULT),
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Cadastro criado com sucesso');
        } else {
            return redirect()->back()->with('message', 'Erro ao criar cadstro');
        }
    }


    public function show(user $user)
    {
        return view('user_show', ['user' => $user]);
    }


    public function edit(User $user)
    {
        return view('user_edit', ['user' => $user]);
    }


    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id
        ]);

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'Cadastro atualizado com sucesso');
    }


    public function destroy(string $id)
    {
        $this->user->where('id', $id)->delete();

        return redirect()->route('users.index');
    }
}
