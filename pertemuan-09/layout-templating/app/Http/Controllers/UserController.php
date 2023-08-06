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
}
