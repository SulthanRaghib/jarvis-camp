<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route untuk menampilkan semua task
Route::get('/', [TaskController::class, 'index'])->name('task.index');
// Route untuk menampilkan detail task.show
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show');
