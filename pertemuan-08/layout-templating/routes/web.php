<?php

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
        ]
    ];

    return view('contents.dashboard', $data);
})->name('dashboard');

Route::get('/users', function () {
    $data = [
        'title' => 'Users',
        'user' => [
            'name' => 'Raghib',
            'email' => 'raghib@gmail.com',
        ]
    ];

    return view('contents.users', $data);
})->name('users');


Route::get('/pages/blank-pages', function () {
    $data = [
        'title' => 'Blank Page',
        'user' => [
            'name' => 'Raghib',
            'email' => 'raghib@gmail.com',
        ]
    ];

    return view('contents.pages.blank', $data);
})->name('blank-pages');
