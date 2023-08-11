<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('contents.dashboard', $data);
    }

    public function pageBlank()
    {
        $data = [
            'title' => 'Blank Page',
        ];

        return view('contents.pages.blank', $data);
    }
}
