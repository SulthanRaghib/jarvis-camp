<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    $data = [
        'title' => 'Dashboard',
        'user' => [
            'name' => 'Raghib',
            'email' => 'raghib@gmail.com',
            'pesan' => '<h1>Teruslah menyerah dan teruslah putus asa!</h1>'
        ]
    ];

    return view('contents.dashboard', $data);
})->name('dashboard');

Route::get('users', [UserController::class, 'index'])->name('users');
Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users/store', [UserController::class, 'store'])->name('users.store');
Route::get('users/detail/{id}', [UserController::class, 'show'])->name('users.detail');
