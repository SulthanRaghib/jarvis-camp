<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'signIn'])->name('signIn');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'signUp'])->name('signUp');
});

Route::post('/logout', [AuthController::class, 'signOut'])->name('signOut');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        $data = [
            'title' => 'Dashboard',
            'user' => [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'pesan' => '<h1>Teruslah menyerah dan teruslah putus asa!</h1>'
            ]
        ];

        return view('contents.dashboard', $data);
    })->name('dashboard');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::put('users/update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('users/detail/{id}', [UserController::class, 'show'])->name('users.detail');
    });
});
