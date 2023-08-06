<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'user' => [
                'name' => 'Raghib',
                'email' => 'raghib@gmail.com',
            ]
        ];

        return view('contents.dashboard', $data);
    }

    public function pageBlank()
    {
        $data = [
            'title' => 'Blank Page',
            'user' => [
                'name' => 'Raghib',
                'email' => 'raghib@gmail.com',
            ]
        ];

        return view('contents.pages.blank', $data);
    }
}
