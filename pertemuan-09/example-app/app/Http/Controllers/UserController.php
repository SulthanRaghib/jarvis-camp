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
}
