<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('contents.auth.login', [
            'title' => 'Login',
            'isAuthPage' => true,
        ]);
    }

    public function signIn(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($data, true)) { // true = add remember token
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau password salah!');
        }
    }

    public function signOut()
    {
        Auth::logout();
        return redirect()->route('login')->with('message', 'Berhasil logout');
    }

    public function register()
    {
        return view('contents.auth.register', [
            'title' => 'Register',
            'isAuthPage' => true,
        ]);
    }

    public function signUp(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5|max:225',
        ]);


        $data['password'] = Hash::make($request->password);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (User::create($data)) {
            return redirect()->route('login')->with('success', 'Berhasil register, silahkan login!');
            if (Auth::attempt($login)) {
                return redirect()->route('login');
            } else {
                return redirect()->route('login')->with('failed', 'Email atau password salah!');
            }
        }
    }
}
