<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('contents.users', [
            'title' => 'User',
            'users' => User::all(),
            'posts' => Post::all(),
        ]);
    }

    public function edit($id)
    {
        return view('contents.users.edit', [
            'title' => 'Edit User',
            'user' => User::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $validateData = $request->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|unique:users,email,' . $user->id,
        ]);

        $user->update($validateData);

        return redirect()->route('users')->with('success', 'User berhasil diupdate!');
    }

    public function create()
    {
        return view('contents.users.create', [
            'title' => 'Create User',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5|max:225',
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect()->route('users')->with('success', 'User berhasil ditambahkan!');
    }

    public function show($id)
    {
        return view('contents.users.detail', [
            'title' => 'Detail User',
            'user' => User::find($id),
        ]);
    }
}
