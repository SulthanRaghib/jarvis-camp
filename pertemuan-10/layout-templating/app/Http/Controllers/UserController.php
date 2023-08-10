<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Users',
            'user' => [
                'name' => 'Raghib',
                'email' => 'raghib@gmail.com',
            ],
            'dataUser' => User::all(),
        ];

        return view('contents.users', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create User',
            'user' => [
                'name' => 'Raghib',
                'email' => 'raghib@gmail.com',
            ],
        ];

        return view('contents.users.create', $data);
    }

    public function show($id)
    {
        $data = [
            'title' => 'Detail User',
            'user' => [
                'name' => 'Raghib',
                'email' => 'raghib@gmail.com',
            ],
            'dataUser' => User::find($id),
        ];

        return view('contents.users.detail', $data);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5|max:225',
        ]);

        User::create($validateData);

        return redirect()->route('users')->with('success', 'User berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit User',
            'user' => [
                'name' => 'Raghib',
                'email' => 'raghib@gmail.com',
            ],
            'dataUser' => User::find($id),
        ];

        return view('contents.users.edit', $data);
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

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users')->with('success', 'User berhasil dihapus!');
    }
}
